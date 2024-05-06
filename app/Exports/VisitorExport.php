<?php

namespace App\Exports;

use App\Models\Tamu;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class VisitorExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
      public function collection()
      {
            return Tamu::all();
      }

      public function headings(): array
      {
            return [
                  'No',
                  'Nama Lengkap',
                  'Telepon',
                  'Instansi',
                  'Keperluan',
                  'Waktu Berkunjaung'
            ];
      }
      public function map($tamu): array
      {

            return [
                  $tamu->id,
                  $tamu->nama_lengkap,
                  $tamu->telepon,
                  $tamu->instansi,
                  $tamu->keperluan,
                  $tamu->created_at,
            ];
      }
}
