<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeminjamanExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
      public function collection()
      {
            $model =  Peminjaman::join("users", "peminjam_id", "users.id")
                  ->select(
                        "kode_pinjam",
                        "users.name",
                        "tanggal_pinjam",
                        "tanggal_kembali",
                        "status",
                        "denda",
                  )
                  ->get();
            return $model;
      }

      public function headings(): array
      {
            return [
                  'Kode Pinjam',
                  'Nama Peminjam',
                  'Tanggal Pinjam',
                  'Tanggal Kembali',
                  'Status',
                  'Denda',
            ];
      }
      public function map($peminjaman): array
      {
            return [
                  $peminjaman->kode_pinjam,
                  $peminjaman->name,
                  Carbon::parse($peminjaman->tanggal_pinjam)->format('d/m/Y'),
                  Carbon::parse($peminjaman->tanggal_kembali)->format('d/m/Y'),
                  $peminjaman->status,
                  $peminjaman->denda,
            ];
      }
}
