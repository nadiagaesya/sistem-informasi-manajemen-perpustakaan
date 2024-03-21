<?php

namespace Database\Seeders;

use App\Models\Tamu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tamu::create([
            'nama_lengkap' => 'ucup',
            'telepon' => '081266473526',
            'instansi' => 'Universitas Riau',
            'keperluan' => 'Berkunjung',
        ]);
    }
}
