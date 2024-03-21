<?php

namespace App\Livewire\Peminjam;

use App\Models\Buku as ModelsBuku;
use App\Models\DetailPeminjaman;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Buku extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['pilihKategori', 'semuaKategori'];

    public $kategori_id, $pilih_kategori, $buku_id, $detail_buku, $search;

    public function pilihKategori($id)
    {
        $this->format();
        $this->kategori_id = $id;
        $this->pilih_kategori = true;
        $this->updatingSearch();
    }

    public function semuaKategori()
    {
        $this->format();
        $this->pilih_kategori = false;
        $this->updatingSearch();
    }

    public function detailBuku($id)
    {
        $this->format();
        $this->detail_buku = true;
        $this->buku_id = $id;
    }

    public function keranjang(ModelsBuku $buku)
    {
        //user harus login
        if (auth()->user()) {
            // Mendapatkan status peminjaman terakhir pengguna
            $lasPeminjaman = Peminjaman::where('peminjam_id', auth()->user()->id)
            ->latest()
            ->first();

            //Jika ada peminjaman sebelumnya
            if ($lasPeminjaman) {
                //memeriksa status peminjaman terakhir pengguna
                if ($lasPeminjaman->status == 1 || $lasPeminjaman->status == 2 || $lasPeminjaman->status == 3) {
                    session()->flash('gagal', 'Anda belum bisa melakukan peminjaman');
                    return;
                }
            }

            // cek role peminjam
            if (auth()->user()->hasRole('peminjam')) {

                $peminjaman_lama = DB::table('peminjaman')
                    ->join('detail_peminjaman', 'peminjaman.id', '=', 'detail_peminjaman.peminjaman_id')
                    ->join('buku', 'buku.id', '=', 'detail_peminjaman.buku_id')
                    ->where('peminjam_id', auth()->user()->id)
                    ->whereIn('buku.kategori_id', [2, 6]) // kategori novel (2) dan komik (6)
                    ->where('status', '!-', 4) //sebelumnya ->where('status', '!-', 3)
                    ->get();

                // Cek jumlah maksimal peminjaman berdasarkan kategori buku
                $max_limit = in_array($buku->kategori_id, [2, 6]) ? 2 : 16;

                // cek jumlah maksimal 2
                if ($peminjaman_lama->count() == $max_limit) {

                    session()->flash('gagal', 'Peminjaman buku kategori ini telah mencapai batas maksimum.');
                } else {
                    // peminjaman belum ada isinya
                    if ($peminjaman_lama->count() == 0) {
                        $peminjaman_baru = Peminjaman::create([
                            'kode_pinjam' => random_int(100000000, 999999999),
                            'peminjam_id' => auth()->user()->id,
                            'status' => 0
                        ]);

                        DetailPeminjaman::create([
                            'peminjaman_id' => $peminjaman_baru->id,
                            'buku_id' => $buku->id
                        ]);

                        $this->dispatch('tambahKeranjang');
                        session()->flash('sukses', 'Buku berhasil ditambahkan ke dalam keranjang');
                    } else {

                        // buku tidak boleh sama
                        if ($peminjaman_lama[0]->buku_id == $buku->id) {
                            session()->flash('gagal', 'Buku tidak boleh sama');
                        } else {

                            DetailPeminjaman::create([
                                'peminjaman_id' => $peminjaman_lama[0]->peminjaman_id,
                                'buku_id' => $buku->id
                            ]);

                            $this->dispatch('tambahKeranjang');
                            session()->flash('sukses', 'Buku berhasil ditambahkan ke dalam keranjang');
                        }
                    }
                }
            } else {
                session()->flash('gagal', 'Role user anda bukan peminjam');
            }
        } else {
            session()->flash('gagal', 'Anda harus login terlebih dahulu');
            redirect('/login');
        }
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
        if ($this->pilih_kategori) {
            if ($this->search) {
                $buku = ModelsBuku::latest()->where('judul', 'like', '%' . $this->search . '%')->where('kategori_id', $this->kategori_id)->paginate(12);
            } else {
                $buku = ModelsBuku::latest()->where('kategori_id', $this->kategori_id)->paginate(12);
            }
            $title = Kategori::find($this->kategori_id)->nama;
        } elseif ($this->detail_buku) {
            $buku = ModelsBuku::find($this->buku_id);
            $title = 'Detail Buku';
        } else {
            //masih belum berfungsi dengan baik search nya
            if ($this->search) {
                $buku = ModelsBuku::latest()->where('judul', 'like', '%' . $this->search . '%')->paginate(12);
            } else {
                $buku = ModelsBuku::latest()->paginate(12);
            }
            $title = 'Semua Buku';
        }

        return view('livewire.peminjam.buku', compact('buku', 'title'));
    }

    public function format()
    {
        $this->detail_buku = false;
        $this->pilih_kategori = false;
        unset($this->buku_id);
        unset($this->kategori_id);
    }
}
