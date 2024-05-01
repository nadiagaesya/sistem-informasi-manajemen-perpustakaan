<?php

namespace App\Exports;

use App\Models\Transaksi; // Pastikan Anda mengganti nama model sesuai kebutuhan
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TransaksiExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Transaksi::all(); // Mengambil semua data transaksi
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Kode Pinjam',
            'Buku',
            'Lokasi',
            'Tanggal Pinjam',
            'Tanggal Kembali',
            'Denda',
            'Status',
        ];
    }
}
