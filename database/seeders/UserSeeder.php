<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'kelas' => '-',
            'nisn_atau_nip' => '1234567890',
            'telepon' => '1234567890',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'kelas' => '-',
            'nisn_atau_nip' => '89098909',
            'telepon' => '89098909',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'kelas' => '12 IPA 1',
            'nisn_atau_nip' => '89878987',
            'telepon' => '89878987',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'rezi',
            'kelas' => '12 IPA 2',
            'nisn_atau_nip' => '6787678767',
            'telepon' => '6787678767',
            'email' => 'rezi@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'nadia',
            'kelas' => '12 IPA 3',
            'nisn_atau_nip' => '5676556776',
            'telepon' => '081266378525',
            'email' => 'nadia@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'alya',
            'kelas' => '12 IPS 1',
            'nisn_atau_nip' => '12343234432',
            'telepon' => '12343234432',
            'email' => 'alya@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'ummu',
            'kelas' => '12 IPS 2',
            'nisn_atau_nip' => '3454345435',
            'telepon' => '3454345435',
            'email' => 'ummu@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'wiwid',
            'kelas' => '12 IPS 3',
            'nisn_atau_nip' => '6787677876',
            'telepon' => '6787677876',
            'email' => 'wiwid@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'Edo',
            'kelas' => '12 IPS 3',
            'nisn_atau_nip' => '2007113796',
            'telepon' => '085213957302',
            'email' => 'edo@gmail.com',
            'password' => bcrypt('1'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
