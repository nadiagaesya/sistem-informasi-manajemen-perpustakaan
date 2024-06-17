<?php

namespace App\Livewire\Tamu;

use App\Models\Tamu;
use Livewire\Component;

class Bukutamu extends Component
{
    public $nama_lengkap;
    public $telepon;
    public $instansi;
    public $keperluan;
    public $tamu;
    public $search, $jumlahPengunjungHariIni;

    public function submit()
    {
        $this->validate([
            'nama_lengkap' => 'required',
            'telepon' => 'required',
            'instansi' => 'required',
            'keperluan' => 'required',
        ]);

        // Simpan data tamu ke dalam database
        Tamu::create([
            'nama_lengkap' => $this->nama_lengkap,
            'telepon' => $this->telepon,
            'instansi' => $this->instansi,
            'keperluan' => $this->keperluan,
        ]);

        // Reset form setelah penyimpanan berhasil
        $this->reset(['nama_lengkap', 'telepon', 'instansi', 'keperluan']);

        // Emitkan event jika diperlukan
        // $this->dispatch('tamuAdded');

        // Bisa tambahkan pesan atau notifikasi sukses di sini
        session()->flash('sukses', 'Data berhasil ditambahkan');
        $this->format();
    }

    // Fungsi untuk melakukan pencarian
    public function searchData()
    {
        $this->render();
    }

    public function render()
    {
        // Mendapatkan data tamu dari model Tamu
        $this->tamu = Tamu::all();

        // Mengambil data tamu berdasarkan pencarian
        $this->tamu = Tamu::latest()->where('nama_lengkap', 'like', '%' . $this->search . '%')
            ->orWhere('instansi', 'like', '%' . $this->search . '%')
            ->get();

        // Menghitung jumlah pengunjung hari ini
        $this->jumlahPengunjungHariIni = Tamu::whereDate('created_at', now()->format('Y-m-d'))->count();

        return view('livewire.tamu.buku-tamu');
    }

    public function format()
    {
        unset($this->submit);
    }
}
