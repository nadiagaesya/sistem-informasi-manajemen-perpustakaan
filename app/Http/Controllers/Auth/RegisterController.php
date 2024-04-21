<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected $rules = [
        'jenis' => 'required|in:guru,siswa,pegawai',
        // Penambahan rules untuk jenis di sini
    ];


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'kelas' => ['required', 'string'], // Validasi untuk kolom kelas
            'nisn_atau_nip' => ['required', 'string'], // Validasi untuk kolom NISN atau NIP
            'jenis' => ['required', 'string', 'in:guru,siswa,pegawai'], //Validasi untuk field jenis
            'telepon' => ['required', 'string'], // Validasi untuk kolom telepon
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'kelas' => $data['kelas'], // Menambahkan kolom kelas
            'nisn_atau_nip' => $data['nisn_atau_nip'], // Menambahkan kolom NISN atau NIP
            'jenis' => $data['jenis'], // Menyimpan jenis yang dipilih
            'telepon' => $data['telepon'], // Menambahkan kolom telepon
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ])->assignRole('peminjam');
    }
}
