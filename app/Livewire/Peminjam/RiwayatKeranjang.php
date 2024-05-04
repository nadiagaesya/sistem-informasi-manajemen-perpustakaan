<?php

namespace App\Livewire\Peminjam;

use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RiwayatKeranjang extends Component
{
    public $peminjamans;
    public $total_buku;

    public function mount()
    {
        // Mengambil ID peminjam yang sedang login
        $peminjam_id = Auth::id();

        // Mengambil data peminjaman dengan informasi peminjam dan informasi buku
        $this->peminjamans = Peminjaman::join('detail_peminjaman', 'peminjaman.id', '=', 'detail_peminjaman.id')
            ->join('buku', 'detail_peminjaman.buku_id', '=', 'buku.id')
            ->join('users', 'peminjaman.peminjam_id', '=', 'users.id')
            ->select('peminjaman.*', 'users.name as peminjam_name', 'users.email as peminjam_email', 'buku.judul', 'buku.penulis')
            ->where('peminjaman.peminjam_id', $peminjam_id)
            ->where('peminjaman.status', 4) // Menambahkan kondisi status peminjaman
            ->get();

        // Iterasi melalui setiap peminjaman untuk menghitung jumlah buku dan menyimpannya di dalam objek peminjaman
        foreach ($this->peminjamans as $peminjaman) {
            $peminjaman->total_buku = count($peminjaman->detail_peminjaman);
        }
    }

    public function render()
    {
        return view('livewire.peminjam.riwayatkeranjang');
    }
}
