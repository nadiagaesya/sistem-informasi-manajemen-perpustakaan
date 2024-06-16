<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = ['tidak ada', 'kelas X', 'kelas XI', 'kelas XII', 'Buku Guru', 'novel', 'komik'];

        foreach ($kategori as $value) {
            Kategori::create([
                'nama' => $value,
                'slug' => Str::slug($value),
            ]);
        }
    }
}
