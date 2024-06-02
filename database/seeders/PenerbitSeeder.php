<?php

namespace Database\Seeders;

use App\Models\Penerbit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PenerbitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penerbit = ['tidak ada', 'kemendikbud', 'yudhistira', 'quadrah', 'erlangga', 'erlangga (ESIS)', 'ESIS', 'narawita', 'tiga serangkai', 'mediatama', 'CV. Media Guru', 'grammedia'];

        foreach ($penerbit as $key => $value) {
            Penerbit::create([
                'nama' => $value,
                'slug' => Str::slug($value)
            ]);
        }
    }
}
