<?php

namespace App\Livewire\Petugas;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Transaksi extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $belum_dipinjam, $sedang_dipinjam, $selesai_dipinjam, $dalam_keranjang, $antrian_perpanjang;
    public $search;

    protected $queryString = ['search'];

    public function belumDipinjam()
    {
        $this->format();
        $this->belum_dipinjam = true;
    }

    public function sedangDipinjam()
    {
        $this->format();
        $this->sedang_dipinjam = true;
    }

    public function dalamKeranjang()
    {
        $this->format();
        $this->dalam_keranjang = true;
    }

    public function selesaiDipinjam()
    {
        $this->format();
        $this->selesai_dipinjam = true;
    }

    //untuk antrian perpanjangan
    public function antrianPerpanjang()
    {
        $this->format();
        $this->antrian_perpanjang = true;
    }

    public function showPinjam(Peminjaman $peminjaman)
    {
        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->buku->update([
                'stok' => $detail_peminjaman->buku->stok - 1
            ]);
        }

        $peminjaman->update([
            'petugas' => auth()->user()->id,
            'status' => 3
        ]);

        session()->flash('sukses', 'Buku berhasil dipinjam');
    }

    //untuk antrian perpanjangan
    public function showPerpanjang(Peminjaman $peminjaman)
    {
        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->buku->update([
                'stok' => $detail_peminjaman->buku->stok - 1
            ]);
        }

        $peminjaman->update([
            'petugas' => auth()->user()->id,
            'status' => 3
        ]);

        session()->flash('sukses', 'Buku berhasil dipinjam');
    }

    public function showKembali(Peminjaman $peminjaman)
    {
        $data = [
            'status' => 4,
            'petugas_kembali' => auth()->user()->id,
            'tanggal_pengembalian' => today(),
            'denda' => 0
        ];

        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->buku->update([
                'stok' => $detail_peminjaman->buku->stok + 1
            ]);
        }

        if (Carbon::create($peminjaman->tanggal_kembali)->lessThan(today())) //memeriksa apakah tanggal tersebut telah lewat (tanggalnya lebih kecil dari hari ini) atau belum
        {
            $denda = Carbon::create($peminjaman->tanggal_kembali)->diffinDays(today()); //membantu kita dalam menghitung jumlah hari yang terjadi antara dua tanggal, dengan hari saat ini sebagai referensi.
            $denda = $denda * 1000;
            $data['denda'] = $denda;
        }

        $peminjaman->update($data);
        session()->flash('sukses', 'Buku berhasil dikembalikan');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function searchData()
    {
        $this->resetPage(); // Reset halaman ketika melakukan pencarian
    }

    public function render()
    {
        if ($this->search) {
            if ($this->belum_dipinjam) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')->where('status', 1)->paginate(5);
            } elseif ($this->antrian_perpanjang) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')->where('status', 2)->paginate(5);
            } elseif ($this->sedang_dipinjam) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')->where('status', 3)->paginate(5);
            } elseif ($this->selesai_dipinjam) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')->where('status', 4)->paginate(5);
            } elseif ($this->dalam_keranjang) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')->where('status', 0)->paginate(5);
            } else {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')->where('status', '!=', 5)->paginate(5);
            }
        } else {
            if ($this->belum_dipinjam) {
                $transaksi = Peminjaman::latest()->where('status', 1)->paginate(5);
            } elseif ($this->antrian_perpanjang) {
                $transaksi = Peminjaman::latest()->where('status', 2)->paginate(5);
            } elseif ($this->sedang_dipinjam) {
                $transaksi = Peminjaman::latest()->where('status', 3)->paginate(5);
            } elseif ($this->selesai_dipinjam) {
                $transaksi = Peminjaman::latest()->where('status', 4)->paginate(5);
            } elseif ($this->dalam_keranjang) {
                $transaksi = Peminjaman::latest()->where('status', 0)->paginate(5);
            } else {
                $transaksi = Peminjaman::latest()->where('status', '!=', 5)->paginate(5);
            }
        }

        return view('livewire.petugas.transaksi', [
            'transaksi' => $transaksi

            //dibawah ini seharusnya hanya menampilkan status yang bernilai tidak = 0 atau di dalam keranjang
            // 'transaksi' => Peminjaman::latest()->where('status', '!=', 0)->paginate(5)

            //menampilkan semua status data buku
            // 'transaksi' => Peminjaman::latest()->paginate(5)
        ]);
    }

    public function format()
    {
        $this->sedang_dipinjam = false;
        $this->belum_dipinjam = false;
        $this->dalam_keranjang = false;
        $this->selesai_dipinjam = false;
        $this->antrian_perpanjang = false;
    }
}
