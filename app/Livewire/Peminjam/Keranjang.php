<?php

namespace App\Livewire\Peminjam;

use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Keranjang extends Component
{
    public $keranjang;
    public $tanggal_pinjam;

    protected $rules = [
        'tanggal_pinjam' => 'required|date|after_or_equal:today',
    ];

    public function hapus(Peminjaman $peminjaman, DetailPeminjaman $detail_peminjaman)
    {

        if ($peminjaman->detail_peminjaman->count() == 0) {
            $detail_peminjaman->delete();
            $peminjaman->delete();
            session()->flash('sukses', 'Data berhasil dihapus');
            redirect('/');
        } else {
            $detail_peminjaman->delete();
            session()->flash('sukses', 'Data berhasil dihapus');
            $this->dispatch('kurangiKeranjang');
        }
    }

    public function hapusMasal()
    {
        $keranjang = Peminjaman::latest()
            ->where('peminjam_id', auth()->user()->id)
            ->where('status', '!=', 4)
            ->first();

        foreach ($keranjang->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->delete();
        }
        $keranjang->delete();
        session()->flash('sukses', 'Data berhasil dihapus');
        redirect('/');
    }

    public function pinjam(Peminjaman $keranjang)
    {
        $this->validate();
        $keranjang->update([
            'status' => 1,
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => Carbon::create($this->tanggal_pinjam)->addDays(3)
            // 'tanggal_kembali' => Carbon::create($this->tanggal_pinjam)->addDays(10)
        ]);
        session()->flash('sukses', 'Buku berhasil diajukan pinjam. Silahkan refresh halaman ini');
    }

    // public function perpanjang(Peminjaman $keranjang)
    // {
    //     // Periksa apakah tanggal pinjam sudah diisi
    //     $this->validate();
    //     if ($keranjang->status == 4) {
    //         $tanggalKembaliBaru = Carbon::create($keranjang->tanggal_kembali)->addDays(10);
    //         $tanggalPinjamBaru = Carbon::create($keranjang->tanggal_pinjam)->addDays(10);
    //         $tanggalPengembalianBaru = null;
    //         $petugasKembaliBaru = null;
    //         $statusBaru = null;

    //         $keranjang->update([
    //             'status' => 2,
    //             'tanggal_pinjam' => $tanggalPinjamBaru,
    //             'tanggal_kembali' => $tanggalKembaliBaru,
    //             'tanggal_pengembalian' => $tanggalPengembalianBaru,
    //             'petugas_kembali' => $petugasKembaliBaru,

    //         ]);
    //         // Tampilkan pesan sukses
    //         session()->flash('sukses', 'Perpanjangan berhasil dilakukan. Silahkan refresh halaman ini');
    //     } else {
    //         // Tampilkan pesan kesalahan jika peminjaman tidak dapat diperpanjang
    //         session()->flash('gagal', 'Peminjaman tidak dapat diperpanjang.');
    //     }
    // }

    // public function reset()
    // {
    //     // Kosongkan variabel $keranjang
    //     $this->keranjang = null;
    //     // Tampilkan pesan sukses
    //     session()->flash('sukses', 'Tabel berhasil direset.');
    // }

    public function mount()
    {
        // kondisi ketika peminjam memiliki status peminjaman 3 (selesai dipinjam atau kosong) maka akan kembali ke halaman semula
        $this->keranjang = Peminjaman::latest()
            ->where('peminjam_id', auth()->user()->id)
            ->where('status', '!=', 5)
            ->first();

        if (!$this->keranjang) {
            return redirect()->to('/');
        }
    }


    public function render()
    {
        return view('livewire.peminjam.keranjang', [
            'keranjang' => $this,
        ]);
    }
}
