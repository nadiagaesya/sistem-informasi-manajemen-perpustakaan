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
            'rak_id' => 12,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('matematika'),
            'sampul' => 'buku/matematika-2018-XII.jpeg',
            'penulis' => 'Abdur Rahman dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 310
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/bahasa-inggris-2018-XII.jpeg',
            'penulis' => 'Utami Widiati dkk',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 12,
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
            'rak_id' => 12,
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
            'penulis' => 'Atmini Dhoruri, Syamsuardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 98
        ]);

        Buku::create([
            'judul' => 'Biologi',
            'slug' => Str::slug('Biologi'),
            'sampul' => 'buku/biologi-peminatan-matk-dan-ilmu-alam-XII.jpeg',
            'penulis' => 'Tati S. Syamsuddin, Lilis Setiasih',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 158
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/fisika-quadra-XII.jpeg',
            'penulis' => 'Fieska Cahyani, Yandri Santoso',
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

        //PENGADAAN BUKU TEKS PEMINATAN SISWA KELAS XII (KELAS K13)

        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/matematika-qudra-XII.jpeg',
            'penulis' => 'Atmini Dhoruri, Syamsuardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 12,
            'stok' => 98
        ]);

        Buku::create([
            'judul' => 'Biologi',
            'slug' => Str::slug('Biologi'),
            'sampul' => 'buku/biologi-peminatan-matk-dan-ilmu-alam-XII.jpeg',
            'penulis' => 'Tati S. Syamsuddin, Lilis Setiasih',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 158
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/fisika-quadra-XII.jpeg',
            'penulis' => 'Fieska Cahyani, Yandri Santoso',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 152
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/kimia-quadra-peminatan-matk-dan-ilmu-alam-XII.jpeg',
            'penulis' => 'Maryono',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 152
        ]);

        Buku::create([
            'judul' => 'Geografi',
            'slug' => Str::slug('Geografi'),
            'sampul' => 'buku/geografi-quadra-XII.jpeg',
            'penulis' => 'Samadi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 140
        ]);

        Buku::create([
            'judul' => 'Sejarah',
            'slug' => Str::slug('Sejarah'),
            'sampul' => 'buku/sejarah-quadra-XII.jpeg',
            'penulis' => 'Tri Karunia',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/ekonomi-quadra-XII.jpeg',
            'penulis' => 'M. Suparmoko',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sosiologi-quadra-XII.jpeg',
            'penulis' => 'Suwardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 160
        ]);

        Buku::create([
            'judul' => 'PSM Matematika',
            'slug' => Str::slug('PSM-Matematika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Trija Falyedi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Biologi',
            'slug' => Str::slug('PSM-Biologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tim Pena Sains',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'PSM Fisika',
            'slug' => Str::slug('PSM-Fisika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tim Pena Sains',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Kimia',
            'slug' => Str::slug('PSM-Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Tim Pena Sains',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'PSM Sejarah',
            'slug' => Str::slug('PSM-Sejarah'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Dwi Winarto',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Geografi',
            'slug' => Str::slug('PSM-Geografi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Rizky Tifa Amelia',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'PSM Ekonomi',
            'slug' => Str::slug('PSM-Ekonomi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Agus Mulyono',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'PSM Sosiologi',
            'slug' => Str::slug('PSM-Sosiologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Suardi',
            'penerbit_id' => 4,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 5
        ]);

        //PENGADAAN BUKU PEGANGAN GURU MATA PELAJARAN WAJIB KURIKULUM 2013
        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/pathway-to-english-1-X-2013.jpg',
            'penulis' => 'Theresia Sudarwati, Eudia Grace',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/pathway-to-english-2-XI-2013.jpg',
            'penulis' => 'Theresia Sudarwati, Eudia Grace',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Bahasa Inggris',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/pathway-to-english-3-XII-2013.jpg',
            'penulis' => 'Theresia Sudarwati, Eudia Grace',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Sadi, dkk',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Sadi, dkk',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Sadi, dkk',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 13,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => '',
            'slug' => Str::slug('Bahasa-Inggris'),
            'sampul' => 'buku/bahasa-inggris-2017-X.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Buku Guru Bahasa Inggris',
            'slug' => Str::slug('Buku-Guru-Bahasa-Inggris'),
            'sampul' => 'buku/buku-guru-bahasa-inggris-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Buku Guru Bahasa Inggris',
            'slug' => Str::slug('Buku-Guru-Bahasa-Inggris'),
            'sampul' => 'buku/buku-guru-bahasa-inggris-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Buku Guru Bahasa Inggris',
            'slug' => Str::slug('Buku-Guru-Bahasa-Inggris'),
            'sampul' => 'buku/buku-guru-bahasa-inggris-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 3
        ]);

        Buku::create([
            'judul' => 'Agama Islam',
            'slug' => Str::slug('Agama-Islam'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Agama Islam',
            'slug' => Str::slug('Buku-Guru-Agama-Islam'),
            'sampul' => 'buku/buku-guru-pendidikan-agama-islam-dan-budi-pekerti-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Agama Islam',
            'slug' => Str::slug('Buku-Guru-Agama-Islam'),
            'sampul' => 'buku/buku-guru-pendidikan-agama-islam-dan-budi-pekerti-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Bahasa Indonesia',
            'slug' => Str::slug('Buku-Guru-Bahasa-Indonesia'),
            'sampul' => 'buku/buku-guru-bahasa-indonesia-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Bahasa Indonesia',
            'slug' => Str::slug('Buku-Guru-Bahasa-Indonesia'),
            'sampul' => 'buku/buku-guru-bahasa-indonesia-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Bahasa Indonesia',
            'slug' => Str::slug('Buku-Guru-Bahasa-Indonesia'),
            'sampul' => 'buku/buku-guru-bahasa-indonesia-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Matematika',
            'slug' => Str::slug('Buku-Guru-Matematika'),
            'sampul' => 'buku/buku-panduan-guru-matematika-X-2021.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'Buku Guru Matematika',
            'slug' => Str::slug('Buku-Guru-Matematika'),
            'sampul' => 'buku/buku-guru-matematika-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'Buku Guru Matematika',
            'slug' => Str::slug('Buku-Guru-Matematika'),
            'sampul' => 'buku/buku-guru-matematika-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 4
        ]);

        Buku::create([
            'judul' => 'Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Buku-Guru-Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/buku-guru-pendidikan-pancasila-dan-kewarganegaraan-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Buku-Guru-Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/buku-guru-pendidikan-pancasila-dan-kewarganegaraan-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Pendidikan Kewarganegaraan',
            'slug' => Str::slug('Buku-Guru-Pendidikan-Kewarganegaraan'),
            'sampul' => 'buku/buku-guru-pendidikan-pancasila-dan-kewarganegaraan-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/pendidikan-jasmani-olahraga-dan-kesehatan-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('Buku-Guru-pjok'),
            'sampul' => 'buku/buku-guru-pendidikan-jasmani-olahraga-dan-kesehatan-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Prakarya',
            'slug' => Str::slug('Prakarya'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Prakarya dan Kewirausahaan',
            'slug' => Str::slug('Buku-Guru-Prakarya'),
            'sampul' => 'buku/buku-guru-prakarya-dan-kewirausahaan-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Prakarya dan Kewirausahaan',
            'slug' => Str::slug('Buku-Guru-Prakarya'),
            'sampul' => 'buku/buku-guru-prakarya-dan-kewirausahaan-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Prakarya dan Kewirausahaan',
            'slug' => Str::slug('Buku-Guru-Prakarya'),
            'sampul' => 'buku/buku-guru-prakarya-dan-kewirausahaan-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Seni Budaya',
            'slug' => Str::slug('Seni-Budaya'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Seni Budaya',
            'slug' => Str::slug('Buku-Guru-Seni-Budaya'),
            'sampul' => 'buku/buku-guru-seni-budaya-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Seni Budaya',
            'slug' => Str::slug('Buku-Guru-Seni-Budaya'),
            'sampul' => 'buku/buku-guru-seni-budaya-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Seni Budaya',
            'slug' => Str::slug('Buku-Guru-Seni-Budaya'),
            'sampul' => 'buku/buku-guru-seni-budaya-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sejarah-indonesia-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Sejarah Indonesia',
            'slug' => Str::slug('Buku-Guru-Sejarah-Indonesia'),
            'sampul' => 'buku/buku-guru-sejarah-indonesia-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Buku Guru Sejarah Indonesia',
            'slug' => Str::slug('Buku-Guru-Sejarah-Indonesia'),
            'sampul' => 'buku/buku-guru-sejarah-indonesia-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 2
        ]);

        //PENGADAAN BUKU PEGANGAN GURU MATA PELAJARAN ILMU-ILMU SOSIAL KURIKULUM 2013

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Ekonomi',
            'slug' => Str::slug('Ekonomi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Sosiologi',
            'slug' => Str::slug('Sosiologi'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 6,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 5
        ]);

        //PENGADAAN BUKU PEGANGAN GURU MATA PELAJARAN ILMU-ILMU ALAM KURIKULUM 2013
        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/kimia-kelompok-peminatan-1-X-2013.jpg',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 2
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/kimia-kelompok-peminatan-2-XI-2013.jpg',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Kimia',
            'slug' => Str::slug('Kimia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/fisika-kelompok-peminatan-1-X-2013.jpg',
            'penulis' => 'Marthen Kanginan',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 2,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/fisika-kelompok-peminatan-2-XI-2013.jpg',
            'penulis' => 'Marthen Kanginan',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 5
        ]);

        Buku::create([
            'judul' => 'Fisika',
            'slug' => Str::slug('Fisika'),
            'sampul' => 'buku/fisika-kelompok-peminatan-3-XII-2013.jpg',
            'penulis' => 'Marthen Kanginan',
            'penerbit_id' => 5,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 5
        ]);

        //PENGADAAN BUKU PEMERINTAH PEGANGAN PESERTA DIDIK
        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('ppkn'),
            'sampul' => 'buku/pendidikan-pancasila-dan-kewarganegaraan-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('ppkn'),
            'sampul' => 'buku/pendidikan-pancasila-dan-kewarganegaraan-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Pendidikan Pancasila dan Kewarganegaraan',
            'slug' => Str::slug('ppkn'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/bahasa-indonesia-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/bahasa-indonesia-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia',
            'slug' => Str::slug('Bahasa-Indonesia'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/matematika-2017-X.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/matematika-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Matematika',
            'slug' => Str::slug('Matematika'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia A',
            'slug' => Str::slug('Sejarah-Indonesia-A'),
            'sampul' => 'buku/sejarah-indonesia-semester1-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia B',
            'slug' => Str::slug('Sejarah-Indonesia-B'),
            'sampul' => 'buku/sejarah-indonesia-semester2-XI-2017.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 7,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia',
            'slug' => Str::slug('Sejarah-Indonesia'),
            'sampul' => 'buku/sejarah-indonesia-XII-2018.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/pendidikan-jasmani-olahraga-dan-kesehatan-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
            'slug' => Str::slug('pjok'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya A',
            'slug' => Str::slug('Seni-Budaya-A'),
            'sampul' => 'buku/seni-budaya-semester1-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Seni Budaya B',
            'slug' => Str::slug('Seni-Budaya-B'),
            'sampul' => 'buku/seni-budaya-semester2-X.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Seni Budaya A',
            'slug' => Str::slug('Seni-Budaya-A'),
            'sampul' => 'buku/seni-budaya-semester1-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya B',
            'slug' => Str::slug('Seni-Budaya-B'),
            'sampul' => 'buku/seni-budaya-semester2-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya A',
            'slug' => Str::slug('Seni-Budaya-A'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Seni Budaya B',
            'slug' => Str::slug('Seni-Budaya-B'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan A',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-A'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-semester1-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan B',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-B'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-semester-2-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan A',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-A'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-semester1-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan B',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-B'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-semester2-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 15
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan A',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-A'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 15
        ]);

        //PENGADAAN PEMINATAN SISWA

        Buku::create([
            'judul' => 'Biologi 1',
            'slug' => Str::slug('Biologi-1'),
            'sampul' => 'buku/biologi-X.jpg',
            'penulis' => 'Arif Priadi, Yanti Herlanti',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi 2',
            'slug' => Str::slug('Biologi-2'),
            'sampul' => 'buku/biologi-XI.jpg',
            'penulis' => 'Arif Priadi, Yanti Herlanti',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Biologi 3',
            'slug' => Str::slug('Biologi-3'),
            'sampul' => 'buku/biologi-XII.jpg',
            'penulis' => 'Arif Priadi, Yanti Herlanti',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 14,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Matematika 1',
            'slug' => Str::slug('Matematika-1'),
            'sampul' => 'buku/seri-pengayaan-matematika-X.jpeg',
            'penulis' => 'Kusnandar, Ifni Muharmanm, Mirna Indrianti',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Matematika 2',
            'slug' => Str::slug('Matematika-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Matematika 3',
            'slug' => Str::slug('Matematika-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia 1',
            'slug' => Str::slug('Kimia-1'),
            'sampul' => 'buku/kimia-X.jpeg',
            'penulis' => 'Muchtaridi',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia 2',
            'slug' => Str::slug('Kimia-2'),
            'sampul' => 'buku/kimia-2-XI-2013.jpg',
            'penulis' => 'Muchtaridi',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Kimia 3',
            'slug' => Str::slug('Kimia-3'),
            'sampul' => 'buku/kimia-3-XII-2013.jpg',
            'penulis' => 'Muchtaridi',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika 1',
            'slug' => Str::slug('Fisika-1'),
            'sampul' => 'buku/fisika-X.jpeg',
            'penulis' => 'Bambang Ruwanto',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika 2',
            'slug' => Str::slug('Fisika-2'),
            'sampul' => 'buku/fisika-2-XI-2013.jpg',
            'penulis' => 'Bambang Ruwanto',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Fisika 3',
            'slug' => Str::slug('Fisika-3'),
            'sampul' => 'buku/fisika-3-XII-2013.jpg',
            'penulis' => 'Bambang Ruwanto',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah 1',
            'slug' => Str::slug('Sejarah-1'),
            'sampul' => 'buku/sejarah-X.jpg',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi 1',
            'slug' => Str::slug('Sosiologi-1'),
            'sampul' => 'buku/seri-pengayaan-sosiologi-X.jpeg',
            'penulis' => 'Sri Sutanti',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi 1',
            'slug' => Str::slug('Geografi-1'),
            'sampul' => 'buku/geografi-X.jpg',
            'penulis' => 'Yulmadia Yulir',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi 2',
            'slug' => Str::slug('Geografi-2'),
            'sampul' => 'buku/geografi-XI.jpeg',
            'penulis' => 'Yulmadia Yulir',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi 3',
            'slug' => Str::slug('Geografi-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
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
            'rak_id' => 3,
            'stok' => 60
        ]);
        Buku::create([
            'judul' => 'Agama islam dan Budi pekerti 2',
            'slug' => Str::slug('Agama-islam-dan-Budi-pekerti-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 60
        ]);
        Buku::create([
            'judul' => 'Agama islam dan Budi pekerti 3',
            'slug' => Str::slug('Agama-islam-dan-Budi-pekerti-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 60
        ]);
        Buku::create([
            'judul' => 'Agama Kristen 1',
            'slug' => Str::slug('Agama-Kristen-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 40
        ]);
        Buku::create([
            'judul' => 'Agama Kristen 2',
            'slug' => Str::slug('Agama-Kristen-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 10
        ]);
        Buku::create([
            'judul' => 'Agama Kristen 3',
            'slug' => Str::slug('Agama-Kristen-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 10
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 1',
            'slug' => Str::slug('Bahasa-Inggris-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 3,
            'stok' => 210
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 2',
            'slug' => Str::slug('Bahasa-Inggris-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
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
            'rak_id' => 3,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Matematika Peminatan 2',
            'slug' => Str::slug('Mozaik-Matematika-Peminatan-2'),
            'sampul' => 'buku/mozaik-matematika-peminatan-mipa-2-XI-2013.jpg',
            'penulis' => 'Yogi Anggraena, Wikan Budi Utami',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Matematika Peminatan 3',
            'slug' => Str::slug('Mozaik-Matematika-Peminatan-3'),
            'sampul' => 'buku/mozaik-matematika-peminatan-mipa-3-XII-2013.jpg',
            'penulis' => 'Yogi Anggraena, Wikan Budi Utami',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Biologi 1',
            'slug' => Str::slug('Mozaik-Biologi-1'),
            'sampul' => 'buku/mozaik-biologi-1-X-2013.jpg',
            'penulis' => 'R. Arifin Nugroho',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Biologi 2',
            'slug' => Str::slug('Mozaik-Biologi-2'),
            'sampul' => 'buku/mozaik-biologi-2-XI-2013.jpg',
            'penulis' => 'R. Arifin Nugroho',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Biologi 3',
            'slug' => Str::slug('Mozaik-Biologi-3'),
            'sampul' => 'buku/mozaik-biologi-semester3-XII-2013.jpg',
            'penulis' => 'R. Arifin Nugroho',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Kimia 1',
            'slug' => Str::slug('Mozaik-Kimia-1'),
            'sampul' => 'buku/mozaik-kimia-1-X-2013.jpg',
            'penulis' => 'Sri Utami',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Kimia 2',
            'slug' => Str::slug('Mozaik-Kimia-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Sri Utami',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Kimia 3',
            'slug' => Str::slug('Mozaik-Kimia-3'),
            'sampul' => 'buku/mozaik-kimia-3-XII-2013.jpg',
            'penulis' => 'Sri Utami',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Fisika 1',
            'slug' => Str::slug('Mozaik-Fisika-1'),
            'sampul' => 'buku/mozaik-fisika-1-X-2013.jpg',
            'penulis' => 'Yuni Supriyanti',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Fisika 2',
            'slug' => Str::slug('Mozaik-Fisika-2'),
            'sampul' => 'buku/mozaik-fisika-2-XI-2013.jpg',
            'penulis' => 'Yuni Supriyanti',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Fisika 3',
            'slug' => Str::slug('Mozaik-Fisika-3'),
            'sampul' => 'buku/mozaik-fisika-3-XII-2013.jpg',
            'penulis' => 'Yuni Supriyati',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Sejarah 1',
            'slug' => Str::slug('Mozaik-Sejarah-1'),
            'sampul' => 'buku/mozaik-sejarah-1-peminatan-ilmu-sosial-X-2013.jpg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Sejarah 2',
            'slug' => Str::slug('Mozaik-Sejarah-2'),
            'sampul' => 'buku/mozaik-sejarah-2-peminatan-ilmu-sosial-XI-2013.jpg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Sejarah 3',
            'slug' => Str::slug('Mozaik-Sejarah-3'),
            'sampul' => 'buku/mozaik-sejarah-3-peminatan-ilmu-sosial-XII-2013.jpg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Geografi 1',
            'slug' => Str::slug('Mozaik-Geografi-1'),
            'sampul' => 'buku/mozaik-geografi-1-X-2013.jpg',
            'penulis' => 'Bagas Ramadhadika',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Geografi 2',
            'slug' => Str::slug('Mozaik-Geografi-2'),
            'sampul' => 'buku/mozaik-geografi-semester2-XI-2013.jpg',
            'penulis' => 'Bagas Ramadhadika',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Geografi 3',
            'slug' => Str::slug('Mozaik-Geografi-3'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => 'Bagas Ramadhadika',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Ekonomi 1',
            'slug' => Str::slug('Mozaik-Ekonomi-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Endang Mulyadi',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Ekonomi 2',
            'slug' => Str::slug('Mozaik-Ekonomi-2'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Endang Mulyadi',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 8,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Ekonomi 3',
            'slug' => Str::slug('Mozaik-Ekonomi-3'),
            'sampul' => 'buku/mozaik-ekonomi-2-XII-2013.jpg',
            'penulis' => 'Endang Mulyadi',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Indonesia 1',
            'slug' => Str::slug('Mozaik-Bahasa Indonesia-1'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Adam Hermawan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Indonesia 2',
            'slug' => Str::slug('Mozaik-Bahasa Indonesia-2'),
            'sampul' => 'buku/mozaik-bahasa-indonesia-2-XI-2013.jpg',
            'penulis' => 'Adam Hermawan, Indah Wukir S',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Indonesia 3',
            'slug' => Str::slug('Mozaik-Bahasa Indonesia-3'),
            'sampul' => 'buku/mozaik-bahasa-indonesia-XII-2013.jpg',
            'penulis' => 'Adam Hermawan',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Inggris 1',
            'slug' => Str::slug('Mozaik-Bahasa Inggris-1'),
            'sampul' => 'buku/mozaik-bahasa-inggris-1-X-2013.jpg',
            'penulis' => 'Gusmanti Ning Rahayu, Asep Mahdi',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Inggris 2',
            'slug' => Str::slug('Mozaik-Bahasa Inggris-2'),
            'sampul' => 'buku/mozaik-bahasa-inggris-2-XI-2013.jpg',
            'penulis' => 'Asep Mahdi',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik Bahasa Inggris 3',
            'slug' => Str::slug('Mozaik-Bahasa Inggris-3'),
            'sampul' => 'buku/mozaik-bahasa-inggris-3-XII-2013.jpg',
            'penulis' => 'Asep Mahdi',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik PPKN 1',
            'slug' => Str::slug('Mozaik-PPKN-1'),
            'sampul' => 'buku/mozaik-ppkn-1-X-2013.jpg',
            'penulis' => 'Zahra Kamilati dkk',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik PPKN 2',
            'slug' => Str::slug('Mozaik-PPKN-2'),
            'sampul' => 'buku/mozaik-ppkn-2-XI-2013.jpg',
            'penulis' => 'Zahra Kamilati dkk',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 11
        ]);
        Buku::create([
            'judul' => 'Mozaik PPKN 3',
            'slug' => Str::slug('Mozaik-PPKN-3'),
            'sampul' => 'buku/mozaik-ppkn-3-XII-2013.jpg',
            'penulis' => 'Zahra Kamilati dkk',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 11
        ]);

        //buku 2022
        //PENGADAAN BUKU PEGANGAN WAJIB SISWA K13 YUDHISTIRA

        Buku::create([
            'judul' => 'Jelajah Matematika Peminatan X',
            'slug' => Str::slug('Jelajah-Matematika-Peminatan-X'),
            'sampul' => 'buku/matematika-peminatan-ipa-X.jpeg',
            'penulis' => 'Novianto Kurnia dkk',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Jelajah Matematika Peminatan XI',
            'slug' => Str::slug('Jelajah-Matematika-Peminatan-XI'),
            'sampul' => 'buku/peminatan-mipa-matematika-XI.jpg',
            'penulis' => 'Novianto Kurnia dkk',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Jelajah Matematika Peminatan XII',
            'slug' => Str::slug('Jelajah-Matematika-Peminatan-XII'),
            'sampul' => 'buku/peminatan-mipa-matematika-XII.jpg',
            'penulis' => 'Novianto Kurnia dkk',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi SMA Kelas X',
            'slug' => Str::slug('Biologi-SMA-Kelas-X'),
            'sampul' => 'buku/seri-pengayaan-biologi-X.jpeg',
            'penulis' => 'Linawati, Dadi',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi SMA Kelas XI',
            'slug' => Str::slug('Biologi-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Biologi SMA Kelas XII',
            'slug' => Str::slug('Biologi-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika SMA Kelas X',
            'slug' => Str::slug('Fisika-SMA-Kelas-X'),
            'sampul' => 'buku/seri-pengayaan-fisika-X.jpeg',
            'penulis' => 'Siti Nurma Nugraha, Retno Bangun Setiawan',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika SMA Kelas XI',
            'slug' => Str::slug('Fisika-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Fisika SMA Kelas XII',
            'slug' => Str::slug('Fisika-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia SMA Kelas X',
            'slug' => Str::slug('Kimia-SMA-Kelas-X'),
            'sampul' => 'buku/seri-pengayaan-kimia-X.jpeg',
            'penulis' => 'Abdul Haris W',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia SMA Kelas XI',
            'slug' => Str::slug('Kimia-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Kimia SMA Kelas XII',
            'slug' => Str::slug('Kimia-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 15,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi SMA Kelas X',
            'slug' => Str::slug('Geografi-SMA-Kelas-X'),
            'sampul' => 'buku/seri-pengayaan-geografi-X.jpeg',
            'penulis' => 'Rudarti',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi SMA Kelas XI',
            'slug' => Str::slug('Geografi-SMA-Kelas-XI'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Geografi SMA Kelas XII',
            'slug' => Str::slug('Geografi-SMA-Kelas-XII'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Ekonomi SMA Kelas X',
            'slug' => Str::slug('Ekonomi-SMA-Kelas-X'),
            'sampul' => 'buku/ekonomi-X.jpg',
            'penulis' => 'Endang Mulyadi, Erick Wicaksono',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 35
        ]);
        Buku::create([
            'judul' => 'Ekonomi SMA Kelas XI',
            'slug' => Str::slug('Ekonomi-SMA-Kelas-XI'),
            'sampul' => 'buku/ekonomi-XI.jpg',
            'penulis' => 'Endang Mulyadi, Erick Wicaksono',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Ekonomi SMA Kelas XII',
            'slug' => Str::slug('Ekonomi-SMA-Kelas-XII'),
            'sampul' => 'buku/ekonomi-XII.jpg',
            'penulis' => 'Endang Mulyadi, Erick Wicaksono',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi SMA Kelas X',
            'slug' => Str::slug('Sosiologi-SMA-Kelas-X'),
            'sampul' => 'buku/sosiologi-X.jpg',
            'penulis' => 'Yad Mulyadi dkk',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi SMA Kelas XI',
            'slug' => Str::slug('Sosiologi-SMA-Kelas-XI'),
            'sampul' => 'buku/sosiologi-XI.jpeg',
            'penulis' => 'Yad Mulyadi dkk',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sosiologi SMA Kelas XII',
            'slug' => Str::slug('Sosiologi-SMA-Kelas-XII'),
            'sampul' => 'buku/sosiologi-XII.jpg',
            'penulis' => 'Yad Mulyadi dkk',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah Peminatan Kelas X',
            'slug' => Str::slug('Sejarah-Peminatan-Kelas-X'),
            'sampul' => 'buku/seri-pengayaan-sejarah-X.jpeg',
            'penulis' => 'Adi Gunanto',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah Peminatan Kelas XI',
            'slug' => Str::slug('Sejarah-Peminatan-Kelas-XI'),
            'sampul' => 'buku/sejarah-XI.jpg',
            'penulis' => 'Hermawan dkk',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 30
        ]);
        Buku::create([
            'judul' => 'Sejarah Peminatan Kelas XII',
            'slug' => Str::slug('Sejarah-Peminatan-Kelas-XII'),
            'sampul' => 'buku/sejarah-XII.jpg',
            'penulis' => 'Hermawan dkk',
            'penerbit_id' => 3,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 30
        ]);

        //PENGADAAN BUKU PEGANGAN WAJIB SISWA (K13) MEDIATAMA
        Buku::create([
            'judul' => 'Pendidikan Agama Islam dan Budi Pekerti 10',
            'slug' => Str::slug('pai-dan-budi-pekerti-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Islam dan Budi Pekerti 11',
            'slug' => Str::slug('pai-dan-budi-pekerti-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Islam dan Budi Pekerti 12',
            'slug' => Str::slug('pai-dan-budi-pekerti-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia 11',
            'slug' => Str::slug('bahasa-indonesia-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Bahasa Indonesia 12',
            'slug' => Str::slug('bahasa-indonesia-12'),
            'sampul' => 'buku/bahasa-indonesia-XII.jpeg',
            'penulis' => 'Sekar Galuh Endah Pinuji Lawuningrum',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Matematika 11',
            'slug' => Str::slug('Matematika-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 5
        ]);
        Buku::create([
            'judul' => 'Matematika 12',
            'slug' => Str::slug('Matematika-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 5
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia 11',
            'slug' => Str::slug('Sejarah-Indonesia-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Sejarah Indonesia 12',
            'slug' => Str::slug('Sejarah-Indonesia-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 10',
            'slug' => Str::slug('Bahasa-Inggris-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 11',
            'slug' => Str::slug('Bahasa-Inggris-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris 12',
            'slug' => Str::slug('Bahasa-Inggris-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Seni Budaya 10',
            'slug' => Str::slug('Seni-Budaya-10'),
            'sampul' => 'buku/seni-budaya-X.jpeg',
            'penulis' => 'Lathifa Royani Fadhila',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 4,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Seni Budaya 11',
            'slug' => Str::slug('Seni-Budaya-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Seni Budaya 12',
            'slug' => Str::slug('Seni-Budaya-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan 10',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan 11',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Prakarya dan Kewirausahaan 12',
            'slug' => Str::slug('Prakarya-dan-Kewirausahaan-12'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-XII.jpeg',
            'penulis' => 'Aditya Hadi Prayitno',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan 10',
            'slug' => Str::slug('Pendidikan-Jasmani-Olahraga-dan-Kesehatan-10'),
            'sampul' => 'buku/pendidikan-jasmani-olahraga-dan-kesehatan-X.jpeg',
            'penulis' => 'Aji Arifin',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan 11',
            'slug' => Str::slug('Pendidikan-Jasmani-Olahraga-dan-Kesehatan-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan 12',
            'slug' => Str::slug('Pendidikan-Jasmani-Olahraga-dan-Kesehatan-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);

        //PENGADAAN BUKU PEGANGAN WAJIB SISWA (K13) MEDIATAMA
        Buku::create([
            'judul' => 'Matematika (MINAT IPA) SMA 10',
            'slug' => Str::slug('Matematika-(MINAT-IPA)-SMA-10'),
            'sampul' => 'buku/matematika-X.jpeg',
            'penulis' => 'Suparmin, Putri Estikarini',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Biologi (MINAT IPA) SMA 10',
            'slug' => Str::slug('Biologi-(MINAT-IPA)-SMA-10'),
            'sampul' => 'buku/biologi-X.jpeg',
            'penulis' => 'Ririn Sfitri',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Fisika (MINAT IPA) SMA 10',
            'slug' => Str::slug('Fisika-(MINAT-IPA)-SMA-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Kimia (MINAT IPA) SMA 10',
            'slug' => Str::slug('Kimia-(MINAT-IPA)-SMA-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Geografi (MINAT IPS) SMA 10',
            'slug' => Str::slug('Geografi-(MINAT-IPS)-SMA-10'),
            'sampul' => 'buku/geografi-X.jpeg',
            'penulis' => 'Agung Budi Raharjo',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Ekonomi (MINAT IPS) SMA 10',
            'slug' => Str::slug('Ekonomi-(MINAT-IPS)-SMA-10'),
            'sampul' => 'buku/ekonomi-X.jpeg',
            'penulis' => 'Sari Dwi Astuti',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Sosiologi (MINAT IPS) SMA 10',
            'slug' => Str::slug('Sosiologi-(MINAT-IPS)-SMA-10'),
            'sampul' => 'buku/sosiologi-X.jpeg',
            'penulis' => 'Lia Candra Rufikasari',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Sejarah (MINAT IPS) SMA 10',
            'slug' => Str::slug('Sejarah-(MINAT-IPS)-SMA-10'),
            'sampul' => 'buku/sejarah-X.jpeg',
            'penulis' => 'Eko Cahyono, Dwi Maryati',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Bahasa dan Sastra Inggris (MINAT BAHASA) SMA 10',
            'slug' => Str::slug('Bahasa-dan-Sastra-Inggris-(MINAT-BAHASA)-SMA-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 5,
            'stok' => 100
        ]);
        Buku::create([
            'judul' => 'Bahasa dan Sastra Inggris (MINAT BAHASA) SMA 11',
            'slug' => Str::slug('Bahasa-dan-Sastra-Inggris-(MINAT-BAHASA)-SMA-11'),
            'sampul' => 'buku/bahasa-dan-sastra-inggris-XI.jpeg',
            'penulis' => 'Yuni Prihartanti, Naela Khikmiah',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 9,
            'stok' => 200
        ]);
        Buku::create([
            'judul' => 'Bahasa dan Sastra Inggris (MINAT BAHASA) SMA 12',
            'slug' => Str::slug('Bahasa-dan-Sastra-Inggris-(MINAT-BAHASA)-SMA-12'),
            'sampul' => 'buku/bahasa-dan-sastra-inggris-XII.jpeg',
            'penulis' => 'Yuni Prihartanti, Febriana Ernawati',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 100
        ]);

        //PENGADAAN BUKU PEGANGAN WAJIB SISWA (K13) MEDIATAMA
        Buku::create([
            'judul' => 'Negara Maju-Matematika (MINAT IPA) 11',
            'slug' => Str::slug('Negara-Maju-Matematika-(MINAT-IPA)-11'),
            'sampul' => 'buku/matematika-XI.jpeg',
            'penulis' => 'Kurniawati, Retno Ayu Wardani',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Matematika (MINAT IPA) 12',
            'slug' => Str::slug('Negara-Maju-Matematika-(MINAT-IPA)-12'),
            'sampul' => 'buku/matematika-XII.jpeg',
            'penulis' => 'Kurniawati, Yassie Erlestyaningsih',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Biologi (MINAT IPA) 11',
            'slug' => Str::slug('Negara-Maju-Biologi-(MINAT-IPA)-11'),
            'sampul' => 'buku/biologi-XI.jpeg',
            'penulis' => 'Annisa Kusumaningrum, Mamluatul Hikmah',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Biologi (MINAT IPA) 12',
            'slug' => Str::slug('Negara-Maju-Biologi-(MINAT-IPA)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Fisika (MINAT IPA) 11',
            'slug' => Str::slug('Negara-Maju-Fisika-(MINAT-IPA)-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Fisika (MINAT IPA) 12',
            'slug' => Str::slug('Negara-Maju-Fisika-(MINAT-IPA)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Kimia (MINAT IPA) 11',
            'slug' => Str::slug('Negara-Maju-Kimia-(MINAT-IPA)-11'),
            'sampul' => 'buku/kimia-XI.jpeg',
            'penulis' => 'Catur Supriyanto, Fitri Astuti',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Kimia (MINAT IPA) 12',
            'slug' => Str::slug('Negara-Maju-Kimia-(MINAT-IPA)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Geografi (MINAT IPS) 11',
            'slug' => Str::slug('Negara-Maju-Geografi-(MINAT-IPS)-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Geografi (MINAT IPS) 12',
            'slug' => Str::slug('Negara-Maju-Geografi-(MINAT-IPS)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Ekonomi (MINAT IPS) 11',
            'slug' => Str::slug('Negara-Maju-Ekonomi-(MINAT-IPS)-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Ekonomi (MINAT IPS) 12',
            'slug' => Str::slug('Negara-Maju-Ekonomi-(MINAT-IPS)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Sosiologi (MINAT IPS) 11',
            'slug' => Str::slug('Negara-Maju-Sosiologi-(MINAT-IPS)-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Sosiologi (MINAT IPS) 12',
            'slug' => Str::slug('Negara-Maju-Sosiologi-(MINAT-IPS)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Sejarah (MINAT IPS) 11',
            'slug' => Str::slug('Negara-Maju-Sejarah-(MINAT-IPS)-11'),
            'sampul' => 'buku/sejarah-XI.jpeg',
            'penulis' => 'Esti Wulandari, Endra Kusuma',
            'penerbit_id' => 10,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Negara Maju-Sejarah (MINAT IPS) 12',
            'slug' => Str::slug('Negara-Maju-Sejarah-(MINAT-IPS)-12'),
            'sampul' => 'buku/sampul-buku-XII.png',
            'penulis' => '-',
            'penerbit_id' => 10,
            'kategori_id' => 4,
            'rak_id' => 16,
            'stok' => 2
        ]);

        //2023
        //PENGADAAN GURU PEGANGAN GURU (KELAS X DAN XI IKM)
        Buku::create([
            'judul' => 'Buku Panduan Guru Pendidikan Pancasila dan Kewarganegaraan Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Pancasila-dan-Kewarganegaraan-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Cerdas Cergas Berbahasa dan Bersastra Indonesia Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Cerdas-Cergas-Berbahasa-dan-Bersastra-Indonesia-Kelas-10'),
            'sampul' => 'buku/cerdas-cergas-berbahasa-dan-bersastra-indonesia-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Matematika Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Matematika-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Seni Tari Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Seni-Tari-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Jasmani-Olahraga-dan-Kesehatan-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 17,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Ilmu Pengetahuan Alam Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Ilmu-Pengetahuan-Alam-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 9
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Ilmu Pengetahuan Sosial Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Ilmu-Pengetahuan-Sosial-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 8
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Informatika Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Informatika-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Pendidikan Agama Islam dan Budi Pekerti Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Agama-Islam-dan-Budi-Pekerti-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Pendidikan Agama Kristen dan Budi Pekerti Kelas 10',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Agama-Kristen-dan-Budi-Pekerti-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 18,
            'stok' => 1
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Seni Tari Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Seni-Tari-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 2
        ]);

        //PENGADAAN BUKU PEGANGAN GURU (KELAS X IKM)
        Buku::create([
            'judul' => 'Buku Guru IPA Kimia Kelas 10',
            'slug' => Str::slug('Buku-Guru-IPA-Kimia-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Guru IPA Fisika Kelas 10',
            'slug' => Str::slug('Buku-Guru-IPA-Fisika-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Ni ketut Lasmi',
            'penerbit_id' => 5,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Guru IPA Biologi Kelas 10',
            'slug' => Str::slug('Buku-Guru-IPA-Biologi-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Irnaningtyas-Sylva Sagita',
            'penerbit_id' => 5,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 4
        ]);

        //PENGADAAN BUKU PEGANGAN SISWA (KELAS X & XI IKM)
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas 10',
            'slug' => Str::slug('Pendidikan-Jasmani-Olahraga-dan-Kesehatan-Kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => 'Muhajir',
            'penerbit_id' => 5,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 273
        ]);
        Buku::create([
            'judul' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan Kelas 11',
            'slug' => Str::slug('Pendidikan-Jasmani-Olahraga-dan-Kesehatan-Kelas-11'),
            'sampul' => 'buku/PJOK-XI.jpg',
            'penulis' => 'Sri Winarni dkk',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 273
        ]);
        Buku::create([
            'judul' => 'Biologi Kelas 11',
            'slug' => Str::slug('Biologi -Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Irnaningtyas-Sylva Sagita',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 124
        ]);
        Buku::create([
            'judul' => 'Kimia Kelas 11',
            'slug' => Str::slug('Kimia -Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Unggul Sudarmo',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 123
        ]);
        Buku::create([
            'judul' => 'Fisika Kelas 11',
            'slug' => Str::slug('Fisika -Kelas-11'),
            'sampul' => 'buku/fisika-kelompok-mata-pelajaran-pilihan-XI.jpg',
            'penulis' => 'Ni Ketut Lasmi',
            'penerbit_id' => 5,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 93
        ]);

        //PENGADAAN BUKU PEGANGAN SISWA (KELAS X & XI IKM)
        Buku::create([
            'judul' => 'Pendidikan Kepercayaan Terhadap Tuhan Yang Maha Esa Dan Budi Pekerti Kelas 10',
            'slug' => Str::slug('Pendidikan-Kepercayaan-Terhadap-Tuhan-Yang-Maha-Esa-Dan-Budi-Pekerti-kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 1
        ]);
        Buku::create([
            'judul' => 'Pendidikan Pancasila Dan Kewarganegaraan Kelas 10',
            'slug' => Str::slug('Pendidikan-Pancasila-Dan-Kewarganegaraan-kelas-10'),
            'sampul' => 'buku/pendidikan-pancasila-dan-kewarganegaraan-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Cerdas Cergas Berbahasa dan Bersastra Indonesia Kelas 10',
            'slug' => Str::slug('Cerdas-Cergas-Berbahasa-dan-Bersastra-Indonesia-kelas-10'),
            'sampul' => 'buku/sampul-buku-X.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Matematika Kelas 10',
            'slug' => Str::slug('Matematika-kelas-10'),
            'sampul' => 'buku/matematika-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Ilmu Pengetahuan Alam Kelas 10',
            'slug' => Str::slug('Ilmu-Pengetahuan-Alam-kelas-10'),
            'sampul' => 'buku/ilmu-pengetahuan-alam-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Ilmu Pengetahuan Sosial Kelas 10',
            'slug' => Str::slug('Ilmu-Pengetahuan-Sosial-kelas-10'),
            'sampul' => 'buku/ilmu-pengetahuan-sosial-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Informatika Kelas 10',
            'slug' => Str::slug('Informatika-kelas-10'),
            'sampul' => 'buku/informatika-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Sejarah Kelas 10',
            'slug' => Str::slug('Sejarah-kelas-10'),
            'sampul' => 'buku/sejarah-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Islam dan Budi Pekerti Kelas 10',
            'slug' => Str::slug('Pendidikan-Agama-Islam-dan-Budi-Pekerti-Kelas-10'),
            'sampul' => 'buku/pendidikan-agama-islam-dan-budi-pekerti-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 210
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Kristen dan Budi Pekerti Kelas 10',
            'slug' => Str::slug('Pendidikan-Agama-Kristen-dan-Budi-Pekerti-Kelas-10'),
            'sampul' => 'buku/pendidikan-agama-kristen-dan-budi-pekerti-X-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 65
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Katholik dan Budi Pekerti Kelas 10',
            'slug' => Str::slug('Pendidikan-Agama-Katholik-dan-Budi-Pekerti-Kelas-10'),
            'sampul' => 'buku/pendidikan-agama-katolik-dan-budi-pekerti-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 5
        ]);
        Buku::create([
            'judul' => 'Pendidikan Kepercayaan Terhadap Tuhan Yang Maha Esa Dan Budi Pekerti Kelas 11',
            'slug' => Str::slug('Pendidikan-Kepercayaan-Terhadap-Tuhan-Yang-Maha-Esa-Dan-Budi-Pekerti-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 1
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Kristen dan Budi Pekerti Kelas 11',
            'slug' => Str::slug('Pendidikan-Agama-Kristen-dan-Budi-Pekerti-Kelas-11'),
            'sampul' => 'buku/pendidikan-agama-kristen-dan-budi-pekerti-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 67
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Katholik dan Budi Pekerti Kelas 11',
            'slug' => Str::slug('Pendidikan-Agama-Katholik-dan-Budi-Pekerti-Kelas-11'),
            'sampul' => 'buku/pendidikan-agama-katolik-dan-budi-pekerti-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 10,
            'stok' => 6
        ]);

        //PENGADAAN BUKU PEGANGAN GURU (KELAS XI IKM)
        Buku::create([
            'judul' => 'Buku Panduan Guru Pendidikan Pancasila dan Kewarganegaraan Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Pancasila-dan-Kewarganegaraan-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Cerdas Cergas Berbahasa dan Bersastra Indonesia Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Cerdas-Cergas-Berbahasa-dan-Bersastra-Indonesia-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Matematika Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Matematika-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Matematika Tingkat Lanjut Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Matematika-Tingkat-Lanjut-Kelas-11'),
            'sampul' => 'buku/buku-panduan-guru-matematika-XI-2021.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 19,
            'stok' => 4
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Sosiologi Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Sosiologi-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Geografi Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Geografi-Kelas-11'),
            'sampul' => 'buku/buku-panduan-guru-geografi-XI.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 2
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Ekonomi Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Ekonomi-Kelas-11'),
            'sampul' => 'buku/buku-panduan-guru-ekonomi-XI-2021.jpeg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 5
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Sejarah Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Sejarah-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Informatika Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Informatika-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 20,
            'stok' => 1
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru Bahasa Inggris Tingkat Lanjut Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Bahasa-Inggris-Tingkat-Lanjut-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru  Pendidikan Jasmani, Olahraga dan Kesehatan Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Jasmani,-Olahraga-dan-Kesehatan-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 3
        ]);
        Buku::create([
            'judul' => 'Buku Panduan Guru  Pendidikan Agama Islam Dan Budi Pekerti Kelas 11',
            'slug' => Str::slug('Buku-Panduan-Guru-Pendidikan-Agama-Islam-Dan-Budi-Pekerti-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 5,
            'rak_id' => 21,
            'stok' => 2
        ]);

        //PENGADAAN BUKU PEGANGAN SISWA (XI IKM)
        Buku::create([
            'judul' => 'Pendidikan Pancasila Dan Kewarganegaraan Kelas 11',
            'slug' => Str::slug('Pendidikan-Pancasila-Dan-Kewarganegaraan-Kelas-11'),
            'sampul' => 'buku/pendidikan-pancasila-dan-kewarganegaraan-XI-2017.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Cerdas Cergas Berbahasa dan Bersastra Indonesia Kelas 11',
            'slug' => Str::slug('Cerdas-Cergas-Berbahasa-dan-Bersastra-Indonesia-Kelas-11'),
            'sampul' => 'buku/cerdas-cergas-berbahasa-dan-bersastra-indonesia-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Matematika Kelas 10',
            'slug' => Str::slug('Matematika-Kelas-10'),
            'sampul' => 'buku/matematika-X-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Matematika Kelas 11',
            'slug' => Str::slug('Matematika-Kelas-11'),
            'sampul' => 'buku/matematika-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 270
        ]);
        Buku::create([
            'judul' => 'Matematika Tingkat Lanjut Kelas 11',
            'slug' => Str::slug('Matematika-Tingkat-Lanjut-Kelas-11'),
            'sampul' => 'buku/matematika-tingkat-lanjut-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 180
        ]);
        Buku::create([
            'judul' => 'Sosiologi Kelas 11',
            'slug' => Str::slug('Sosiologi-Kelas-11'),
            'sampul' => 'buku/sosiologi-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 95
        ]);
        Buku::create([
            'judul' => 'Geografi Kelas 11',
            'slug' => Str::slug('Geografi-Kelas-11'),
            'sampul' => 'buku/geografi-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 65
        ]);
        Buku::create([
            'judul' => 'Ekonomi Kelas 11',
            'slug' => Str::slug('Ekonomi-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 150
        ]);
        Buku::create([
            'judul' => 'Sejarah Kelas 11',
            'slug' => Str::slug('Sejarah-Kelas-11'),
            'sampul' => 'buku/sejarah-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 65
        ]);
        Buku::create([
            'judul' => 'Informatika Kelas 11',
            'slug' => Str::slug('Informatika-Kelas-11'),
            'sampul' => 'buku/informatika-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 65
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris Tingkat Lanjut Kelas 11',
            'slug' => Str::slug('Bahasa-Inggris-Tingkat-Lanjut-Kelas-11'),
            'sampul' => 'buku/bahasa-inggris-tingkat-lanjut-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 65
        ]);
        Buku::create([
            'judul' => 'Pendidikan Agama Islam Dan Budi Pekerti Kelas 11',
            'slug' => Str::slug('Pendidikan-Agama-Islam-Dan-Budi-Pekerti-Kelas-11'),
            'sampul' => 'buku/pendidikan-agama-islam-dan-budi-pekerti-XI-2021.jpg',
            'penulis' => '-',
            'penerbit_id' => 2,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 210
        ]);

        //PENGADAAN BUKU PEGANGAN SISWA (KELAS X & XI IKM)
        Buku::create([
            'judul' => 'Prakarya Kelas 10',
            'slug' => Str::slug('Prakarya-Kelas-10'),
            'sampul' => 'buku/prakarya-1-X.jpg',
            'penulis' => 'Rina Laelasari,Dkk',
            'penerbit_id' => 3,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 213
        ]);
        Buku::create([
            'judul' => 'Prakarya Kelas 11',
            'slug' => Str::slug('Prakarya-Kelas-11'),
            'sampul' => 'buku/prakarya-dan-kewirausahaan-2-XI.jpg',
            'penulis' => 'Rina Laelasari,Dkk',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 213
        ]);
        Buku::create([
            'judul' => 'Pendidikan Seni Tari Kelas 11',
            'slug' => Str::slug('Pendidikan-Seni-Tari-Kelas-11'),
            'sampul' => 'buku/sampul-buku-XI.png',
            'penulis' => 'Dikdik Pebriansyah',
            'penerbit_id' => 3,
            'kategori_id' => 3,
            'rak_id' => 11,
            'stok' => 67
        ]);

        //PENGADAAN BUKU PEGANGAN SISWA (KELAS X & XI IKM)
        Buku::create([
            'judul' => 'Seni dan Prakarya (Seni Tari) Kelas 10',
            'slug' => Str::slug('Seni-dan-Prakarya-(Seni Tari)-Kelas-10'),
            'sampul' => 'buku/seni-dan-prakarya-seni-tari-X.jpg',
            'penulis' => 'Restu Ningsih Budi Astuti dan Sri Widiyani',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 66
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris Esensi SMA Merdeka Kelas 10',
            'slug' => Str::slug('Bahasa-Inggris-Esensi-SMA-Merdeka-Kelas-10'),
            'sampul' => 'buku/bahasa-inggris-X.jpg',
            'penulis' => 'Yuni Prihartanti',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 273
        ]);
        Buku::create([
            'judul' => 'Bahasa Inggris Esensi SMA Merdeka Kelas 11',
            'slug' => Str::slug('Bahasa-Inggris-Esensi-SMA-Merdeka-Kelas-11'),
            'sampul' => 'buku/bahasa-inggris-XI.jpg',
            'penulis' => 'Yuni Prihartanti, Sari Ratnaningsih',
            'penerbit_id' => 10,
            'kategori_id' => 2,
            'rak_id' => 6,
            'stok' => 273
        ]);
    }
}
