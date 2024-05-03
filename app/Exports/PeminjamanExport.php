<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeminjamanExport implements FromView, WithMapping
{
      public function view(): View
      {
            $peminjamans = Peminjaman::all();

            return view('exports.peminjaman', [
                  'peminjamans' => $peminjamans
            ]);
      }

      public function map($peminjaman): array
      {
            return [
                  $peminjaman->id,
                  $peminjaman->nama,
                  $peminjaman->kode_pinjam,
                  $peminjaman->tanggal_pinjam,
                  $peminjaman->tanggal_kembali,
                  $peminjaman->status,
                  $peminjaman->denda,
            ];
      }
}
