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
            'sampul' => 'buku/pendidikan-pancasila-dan-kewarganegaraan-XII-2018.jpg',
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

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Atmini Dhoruri dkk',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 98
        ]);

        Buku::create([
            'judul' => 'Biologi',
            'slug' => Str::slug('Biologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tati S. Syamsuddin',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 158
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Fieska Cahyani dkk',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 152
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Maryono',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 152
        ]);

        Buku::create([
            'judul' => 'Geografi',
            'slug' => Str::slug('Geografi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Samadi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 140
        ]);

        Buku::create([
            'judul' => 'Sejarah',
            'slug' => Str::slug('Sejarah'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tri Karunia',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'M. Suparmoko',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Suwardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'PSM Matematika',
            'slug' => Str::slug('PSM-Matematika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Trija Falyedi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Biologi',
            'slug' => Str::slug('PSM-Biologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tim Pena Sains',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'PSM Fisika',
            'slug' => Str::slug('PSM-Fisika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tim Pena Sains',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Kimia',
            'slug' => Str::slug('PSM-Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tim Pena Sains',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'PSM Sejarah',
            'slug' => Str::slug('PSM-Sejarah'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Dwi Winarto',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Geografi',
            'slug' => Str::slug('PSM-Geografi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Rizky Tifa Amelia',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Ekonomi',
            'slug' => Str::slug('PSM-Ekonomi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Agus Mulyono',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'PSM Sosiologi',
            'slug' => Str::slug('PSM-Sosiologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Suardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Theresia Sudarwati',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Theresia Sudarwati',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Theresia Sudarwati',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Sadi, dkk',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Sadi, dkk',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Sadi, dkk',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Prakarya',
            'slug' => Str::slug('Prakarya'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Prakarya',
            'slug' => Str::slug('Prakarya'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Prakarya',
            'slug' => Str::slug('Prakarya'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Seni Budaya',
            'slug' => Str::slug('Seni-Budaya'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Seni Budaya',
            'slug' => Str::slug('Seni-Budaya'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Seni Budaya',
            'slug' => Str::slug('Seni-Budaya'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Marthen Kanginan',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Marthen Kanginan',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Marthen Kanginan',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 5
        ]);

        //PENGADAAN BUKU PEMERINTAH PEGANGAN PESERTA DIDIK
        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('ppkn'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('ppkn'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('ppkn'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia A',
            'slug' => Str::slug('Sejarah-Indonesia-A'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia B',
            'slug' => Str::slug('Sejarah-Indonesia-B'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya A',
            'slug' => Str::slug('Seni-Budaya-A'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Seni Budaya B',
            'slug' => Str::slug('Seni-Budaya-B'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Seni Budaya A',
            'slug' => Str::slug('Seni-Budaya-A'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya B',
            'slug' => Str::slug('Seni-Budaya-B'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya A',
            'slug' => Str::slug('Seni-Budaya-A'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya B',
            'slug' => Str::slug('Seni-Budaya-B'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan A',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-A'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan B',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-B'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan A',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-A'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan B',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-B'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan A',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-A'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 15
        ]);

        //PENGADAAN PEMINATAN SISWA

        Buku::create([
            'judul' => 'Biologi 1',
            'slug' => Str::slug('Biologi-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi 2',
            'slug' => Str::slug('Biologi-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Biologi 3',
            'slug' => Str::slug('Biologi-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Matematika 1',
            'slug' => Str::slug('Matematika-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Matematika 2',
            'slug' => Str::slug('Matematika-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Matematika 3',
            'slug' => Str::slug('Matematika-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia 1',
            'slug' => Str::slug('Kimia-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia 2',
            'slug' => Str::slug('Kimia-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Kimia 3',
            'slug' => Str::slug('Kimia-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika 1',
            'slug' => Str::slug('Fisika-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika 2',
            'slug' => Str::slug('Fisika-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Fisika 3',
            'slug' => Str::slug('Fisika-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah 1',
            'slug' => Str::slug('Sejarah-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi 1',
            'slug' => Str::slug('Sosiologi-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi 1',
            'slug' => Str::slug('Geografi-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi 3',
            'slug' => Str::slug('Geografi-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 20
        ]);

        //BUKU PEGANGAN SISWA K13

        Buku::create([
            'judul' => 'Agama islam dan Budi pekerti 1',
            'slug' => Str::slug('Agama-islam-dan-Budi-pekerti-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 60
        ]);
        Buku::create([
            'judul' => 'Agama islam dan Budi pekerti 2',
            'slug' => Str::slug('Agama-islam-dan-Budi-pekerti-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 60
        ]);
        Buku::create([
            'judul' => 'Agama islam dan Budi pekerti 3',
            'slug' => Str::slug('Agama-islam-dan-Budi-pekerti-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 60
        ]);
        Buku::create([
            'judul' => 'Agama Kristen 1',
            'slug' => Str::slug('Agama-Kristen-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Agama Kristen 2',
            'slug' => Str::slug('Agama-Kristen-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 10
        ]);
        Buku::create([
            'judul' => 'Agama Kristen 3',
            'slug' => Str::slug('Agama-Kristen-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 10
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 1',
            'slug' => Str::slug('Bahasa-Inggris-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 210
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 2',
            'slug' => Str::slug('Bahasa-Inggris-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 120
        ]);

        //BUKU PAKET LITERASI DAN PENGAYAAN (YANG MOZAIK AJA)

        Buku::create([
            'judul' => 'Mozaik Matematika Peminatan 1',
            'slug' => Str::slug('Mozaik-Matematika-Peminatan-1'),
            'sampul' => 'buku/mozaik-matematika-peminatan-mipa-1-X-2013.jpg',
            'penulis' => 'Yogi Anggraena, Wikan Budi Utami',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Matematika Peminatan 2',
            'slug' => Str::slug('Mozaik-Matematika-Peminatan-2'),
            'sampul' => 'buku/mozaik-matematika-peminatan-mipa-2-XI-2013.jpg',
            'penulis' => 'Yogi Anggraena, Wikan Budi Utami',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Matematika Peminatan 3',
            'slug' => Str::slug('Mozaik-Matematika-Peminatan-3'),
            'sampul' => 'buku/mozaik-matematika-peminatan-mipa-3-XII-2013.jpg',
            'penulis' => 'Yogi Anggraena, Wikan Budi Utami',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Biologi 1',
            'slug' => Str::slug('Mozaik-Biologi-1'),
            'sampul' => 'buku/mozaik-biologi-1-X-2013.jpg',
            'penulis' => 'R. Arifin Nugroho',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Biologi 2',
            'slug' => Str::slug('Mozaik-Biologi-2'),
            'sampul' => 'buku/mozaik-biologi-2-XI-2013.jpg',
            'penulis' => 'R. Arifin Nugroho',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Biologi 3',
            'slug' => Str::slug('Mozaik-Biologi-3'),
            'sampul' => 'buku/mozaik-biologi-semester3-XII-2013.jpg',
            'penulis' => 'R. Arifin Nugroho',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Kimia 1',
            'slug' => Str::slug('Mozaik-Kimia-1'),
            'sampul' => 'buku/mozaik-kimia-1-X-2013.jpg',
            'penulis' => 'Sri Utami',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Kimia 2',
            'slug' => Str::slug('Mozaik-Kimia-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Sri Utami',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Kimia 3',
            'slug' => Str::slug('Mozaik-Kimia-3'),
            'sampul' => 'buku/mozaik-kimia-3-XII-2013.jpg',
            'penulis' => 'Sri Utami',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Fisika 1',
            'slug' => Str::slug('Mozaik-Fisika-1'),
            'sampul' => 'buku/mozaik-fisika-1-X-2013.jpg',
            'penulis' => 'Yuni Supriyanti',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Fisika 2',
            'slug' => Str::slug('Mozaik-Fisika-2'),
            'sampul' => 'buku/mozaik-fisika-2-XI-2013.jpg',
            'penulis' => 'Yuni Supriyanti',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Fisika 3',
            'slug' => Str::slug('Mozaik-Fisika-3'),
            'sampul' => 'buku/mozaik-fisika-3-XII-2013.jpg',
            'penulis' => 'Yuni Supriyati',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Sejarah 1',
            'slug' => Str::slug('Mozaik-Sejarah-1'),
            'sampul' => 'buku/mozaik-sejarah-1-peminatan-ilmu-sosial-X-2013.jpg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Sejarah 2',
            'slug' => Str::slug('Mozaik-Sejarah-2'),
            'sampul' => 'buku/mozaik-sejarah-2-peminatan-ilmu-sosial-XI-2013.jpg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Sejarah 3',
            'slug' => Str::slug('Mozaik-Sejarah-3'),
            'sampul' => 'buku/mozaik-sejarah-3-peminatan-ilmu-sosial-XII-2013.jpg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Geografi 1',
            'slug' => Str::slug('Mozaik-Geografi-1'),
            'sampul' => 'buku/mozaik-geografi-1-X-2013.jpg',
            'penulis' => 'Bagas Ramadhadika',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Geografi 2',
            'slug' => Str::slug('Mozaik-Geografi-2'),
            'sampul' => 'buku/mozaik-geografi-semester2-XI-2013.jpg',
            'penulis' => 'Bagas Ramadhadika',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Geografi 3',
            'slug' => Str::slug('Mozaik-Geografi-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Bagas Ramadhadika',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Ekonomi 1',
            'slug' => Str::slug('Mozaik-Ekonomi-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Endang Mulyadi',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Ekonomi 2',
            'slug' => Str::slug('Mozaik-Ekonomi-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Endang Mulyadi',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Ekonomi 3',
            'slug' => Str::slug('Mozaik-Ekonomi-3'),
            'sampul' => 'buku/mozaik-ekonomi-2-XII-2013.jpg',
            'penulis' => 'Endang Mulyadi',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Indonesia 1',
            'slug' => Str::slug('Mozaik-Bahasa Indonesia-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Adam Hermawan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Indonesia 2',
            'slug' => Str::slug('Mozaik-Bahasa Indonesia-2'),
            'sampul' => 'buku/mozaik-bahasa-indonesia-2-XI-2013.jpg',
            'penulis' => 'Adam Hermawan, Indah Wukir S',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Indonesia 3',
            'slug' => Str::slug('Mozaik-Bahasa Indonesia-3'),
            'sampul' => 'buku/mozaik-bahasa-indonesia-XII-2013.jpg',
            'penulis' => 'Adam Hermawan',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Inggris 1',
            'slug' => Str::slug('Mozaik-Bahasa Inggris-1'),
            'sampul' => 'buku/mozaik-bahasa-inggris-1-X-2013.jpg',
            'penulis' => 'Gusmanti Ning Rahayu, Asep Mahdi',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Inggris 2',
            'slug' => Str::slug('Mozaik-Bahasa Inggris-2'),
            'sampul' => 'buku/mozaik-bahasa-inggris-2-XI-2013.jpg',
            'penulis' => 'Asep Mahdi',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Inggris 3',
            'slug' => Str::slug('Mozaik-Bahasa Inggris-3'),
            'sampul' => 'buku/mozaik-bahasa-inggris-3-XII-2013.jpg',
            'penulis' => 'Asep Mahdi',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik PPKN 1',
            'slug' => Str::slug('Mozaik-PPKN-1'),
            'sampul' => 'buku/mozaik-ppkn-1-X-2013.jpg',
            'penulis' => 'Zahra Kamilati dkk',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik PPKN 2',
            'slug' => Str::slug('Mozaik-PPKN-2'),
            'sampul' => 'buku/mozaik-ppkn-2-XI-2013.jpg',
            'penulis' => 'Zahra Kamilati dkk',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik PPKN 3',
            'slug' => Str::slug('Mozaik-PPKN-3'),
            'sampul' => 'buku/mozaik-ppkn-3-XII-2013.jpg',
            'penulis' => 'Zahra Kamilati dkk',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 11
        ]);

        //buku 2022
        //PENGADAAN BUKU PEGANGAN WAJIB SISWA K13 YUDHISTIRA

        Buku::create([
            'judul' => 'Jelajah Matematika Peminatan X',
            'slug' => Str::slug('Jelajah-Matematika-Peminatan-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Jelajah Matematika Peminatan XI',
            'slug' => Str::slug('Jelajah-Matematika-Peminatan-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Jelajah Matematika Peminatan XII',
            'slug' => Str::slug('Jelajah-Matematika-Peminatan-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi SMA Kelas X',
            'slug' => Str::slug('Biologi-SMA-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi SMA Kelas XI',
            'slug' => Str::slug('Biologi-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi SMA Kelas XII',
            'slug' => Str::slug('Biologi-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika SMA Kelas X',
            'slug' => Str::slug('Fisika-SMA-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika SMA Kelas XI',
            'slug' => Str::slug('Fisika-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika SMA Kelas XII',
            'slug' => Str::slug('Fisika-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia SMA Kelas X',
            'slug' => Str::slug('Kimia-SMA-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia SMA Kelas XI',
            'slug' => Str::slug('Kimia-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia SMA Kelas XII',
            'slug' => Str::slug('Kimia-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi SMA Kelas X',
            'slug' => Str::slug('Geografi-SMA-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi SMA Kelas XI',
            'slug' => Str::slug('Geografi-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi SMA Kelas XII',
            'slug' => Str::slug('Geografi-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Ekonomi SMA Kelas X',
            'slug' => Str::slug('Ekonomi-SMA-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Ekonomi SMA Kelas XI',
            'slug' => Str::slug('Ekonomi-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Ekonomi SMA Kelas XII',
            'slug' => Str::slug('Ekonomi-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi SMA Kelas X',
            'slug' => Str::slug('Sosiologi-SMA-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi SMA Kelas XI',
            'slug' => Str::slug('Sosiologi-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi SMA Kelas XII',
            'slug' => Str::slug('Sosiologi-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah Peminatan Kelas X',
            'slug' => Str::slug('Sejarah-Peminatan-Kelas-X'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah Peminatan Kelas XI',
            'slug' => Str::slug('Sejarah-Peminatan-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 12,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah Peminatan Kelas XII',
            'slug' => Str::slug('Sejarah-Peminatan-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 30
        ]);
    }
}
