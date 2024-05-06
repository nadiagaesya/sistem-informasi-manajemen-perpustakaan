<?php

namespace Database\Seeders;

use App\Models\DetailPeminjaman;
use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data 1 (selesai dipinjam)
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 3,
            'petugas_pinjam' => 1,
            'petugas_kembali' => 1,
            'status' => 4,
            'denda' => 0,
            'tanggal_pinjam' => now()->subDays(20),
            'tanggal_kembali' => now()->subDays(10),
            'tanggal_pengembalian' => now()->subDays(11)
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'buku_id' => 1
        ]);
        DetailPeminjaman::create([
            'peminjaman_id' => 1,
            'buku_id' => 2
        ]);

        //data 2 (sedang dipinjam)
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 4,
            'petugas_pinjam' => 2,
            'status' => 3,
            'tanggal_pinjam' => now(),
            'tanggal_kembali' => now()->addDays(10)
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 2,
            'buku_id' => 4
        ]);
        DetailPeminjaman::create([
            'peminjaman_id' => 2,
            'buku_id' => 5
        ]);

        //data 3 (antrian pinjam)
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 5,
            'status' => 1,
            'tanggal_pinjam' => now()->addDays(10),
            'tanggal_kembali' => now()->addDays(20)
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 3,
            'buku_id' => 6
        ]);
        DetailPeminjaman::create([
            'peminjaman_id' => 3,
            'buku_id' => 7
        ]);

        //data 4 (antrian perpanjang)
        // Peminjaman::create([
        //     'kode_pinjam' => random_int(100000000, 999999999),
        //     'peminjam_id' => 6,
        //     'status' => 2,
        //     'tanggal_pinjam' => now()->addDays(10),
        //     'tanggal_kembali' => now()->addDays(20)
        // ]);

        // DetailPeminjaman::create([
        //     'peminjaman_id' => 4,
        //     'buku_id' => 6
        // ]);
        // DetailPeminjaman::create([
        //     'peminjaman_id' => 4,
        //     'buku_id' => 7
        // ]);

        //data 5 (didalam keranjang)
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 7,
            'status' => 2,
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => 4,
            'buku_id' => 3
        ]);

        //data 6 (tidak ada buku)
        Peminjaman::create([
            'kode_pinjam' => random_int(100000000, 999999999),
            'peminjam_id' => 8,
            'status' => 0,
        ]);
    }
}
