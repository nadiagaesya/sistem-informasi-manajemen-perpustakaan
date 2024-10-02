<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PeminjamController extends Controller
{
    public function index()
    {
        $data = Peminjaman::with("user") //memuat relasi user dengan model peminjaman
            ->where("status", 3) //memfilter data yang status 3
            ->where(function ($query) { // fungsi untuk menggunakan fungsi dibawah ini
                $query->whereDate("tanggal_kembali", Carbon::today()->addDays(3)) //mencari peminjaman yang tanggal kembalinya 3 hari dari sekarang
                    ->orWhereDate("tanggal_kembali", Carbon::today()->subDays(3)) //atau 3 hari yang lalu
                    ->orWhereDate("tanggal_kembali", Carbon::today()); //atau hari ini
            })
            ->whereNull("tanggal_pengembalian") // memastiikan tanggal_pengembalian masih null (belum dikembalikan)
            ->get(); //mengambil semua data yang sesuai dengan filter diatas
        return response()->json([
            "data" => $data
        ]); // mengembalikan data dalam format JSON
    }

    public function updateStatus(Request $request, $peminjamId)
    {
        //membuat validator untuk memeriksa apakah field status ada dan tidak kosong
        $validator = Validator::make($request->all(), [
            "status" => "required",
        ]);
        //jika validasi gagal, mengembalikan pesan error kode status 422
        if ($validator->fails()) {
            return response()->json([
                'message' => 'validation error',
                'errors' => $validator->messages()
            ], 422);
        }

        $data = Peminjaman::findOrFail($peminjamId); //mencari peminjaman berdasarkan ID. jika tidak ditemukan, akan mengembalikan error 404
        $data->status_alert = $request->status; //mengubah nilai status_alert dengan nilai yang diterima dari permintaan
        $data->update(); //menyimpan perubahan ke database
        //mengembalikan respon json yang mnyatakan bahwa pembaruan berhasil
        return response()->json([
            'errors' => null,
            "message" => "Berhasil Update Status Alert Peminjaman"
        ]);
    }
}
