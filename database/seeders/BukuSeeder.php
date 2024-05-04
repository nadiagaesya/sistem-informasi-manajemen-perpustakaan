<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/bahasa-indonesia-2018-XII.jpeg',
            'penulis' => 'Maman Suryaman dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 3,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('matematika'),
            'sampul' => 'buku/matematika-2018-XII.jpeg',
            'penulis' => 'Abdur Rahman dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 7,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/bahasa-inggris-2018-XII.jpeg',
            'penulis' => 'Utami Widiati dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 8,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sejarah-indonesia-2018-XII.jpeg',
            'penulis' => 'Abdurkhman dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Pendidikan Jasmani Olahraga dan Kesehatan',
            'slug' => Str::slug('Pendidikan-Jasmani-Olahraga-dan-Kesehatan'),
            'sampul' => 'buku/pendidikan-jasmani-olahraga-dan-kesehatan-2018-XII.jpeg',
            'penulis' => 'Soemaryoto dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('Pendidikan-Pancasila-dan-Kewarganegaraan'),
            'sampul' => 'buku/pendidikan-pancasila-dan-kewarganegaraan-2018-XII.jpeg',
            'penulis' => 'Yusnawan Lubis dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 2,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Pendidikan Agama Islam dan Budi Pekerti',
            'slug' => Str::slug('Pendidikan-Agama-Islam-dan-Budi-Pekerti'),
            'sampul' => 'buku/pendidikan-agama-islam-dan-budi-pekerti-2018-XII.jpeg',
            'penulis' => 'MA. Sholeh Dimayathi dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 180
        ]);

        Buku::create([
            'judul' => 'Pendidikan Agama Kristen dan Budi Pekerti',
            'slug' => Str::slug('Pendidikan-Agama-Kristen-dan-Budi-Pekerti'),
            'sampul' => 'buku/pendidikan-agama-islam-dan-budi-pekerti-2018-XII.jpeg',
            'penulis' => 'pdt Janse Belandina Non Sertano dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 20
        ]);

        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-2018-XII.jpeg',
            'penulis' => 'Hendriana Werdhaningsih dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 311
        ]);


        Buku::create([
            'judul' => 'Seni Budaya Semester 1',
            'slug' => Str::slug('Seni-Budaya-Semester-1'),
            'sampul' => 'buku/seni-budaya-2018-XII-semester1.jpeg',
            'penulis' => 'Agus Budiman dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Seni Budaya Semester 2',
            'slug' => Str::slug('Seni-Budaya-Semester-2'),
            'sampul' => 'buku/seni-budaya-2018-XII-semester2.jpeg',
            'penulis' => 'Agus Budiman dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 310
        ]);


        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/matematika-qudra-XII.jpeg',
            'penulis' => 'Atmini Dhoruri',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 98
        ]);

        Buku::create([
            'judul' => 'Biologi',
            'slug' => Str::slug('Biologi'),
            'sampul' => 'buku/biologi-peminatan-matk-dan-ilmu-alam-XII.jpeg',
            'penulis' => 'Tati S. Syamsuddin',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 158
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/fisika-quadra-XII.jpeg',
            'penulis' => 'Fieska Cahyani dkk',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 152
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/kimia-quadra-peminatan-matk-dan-ilmu-alam-XII.jpeg',
            'penulis' => 'Maryono',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 152
        ]);

        Buku::create([
            'judul' => 'Geografi',
            'slug' => Str::slug('Geografi'),
            'sampul' => 'buku/geografi-quadra-XII.jpeg',
            'penulis' => 'Samadi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 140
        ]);

        Buku::create([
            'judul' => 'Sejarah',
            'slug' => Str::slug('Sejarah'),
            'sampul' => 'buku/sejarah-quadra-XII.jpeg',
            'penulis' => 'Tri Karunia',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/ekonomi-quadra-XII.jpeg',
            'penulis' => 'M. Suparmoko',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sosiologi-quadra-XII.jpeg',
            'penulis' => 'Suwardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 160
        ]);
    }
}
