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
        $data = Peminjaman::with("user")
            ->where("status", 3)
            ->where(function ($query) {
                $query->whereDate("tanggal_kembali", Carbon::today()->addDays(3))
                    ->orWhereDate("tanggal_kembali", Carbon::today()->subDays(3))
                    ->orWhereDate("tanggal_kembali", Carbon::today());
            })
            ->whereNull("tanggal_pengembalian")
            ->get();
        return response()->json([
            "data" => $data
        ]);
    }

    public function updateStatus(Request $request, $peminjamId)
    {
        $validator = Validator::make($request->all(), [
            "status" => "required",
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'validation error',
                'errors' => $validator->messages()
            ], 422);
        }

        $data = Peminjaman::findOrFail($peminjamId);
        $data->status_alert = $request->status;
        $data->update();
        return response()->json([
            'errors' => null,
            "message" => "Berhasil Update Status Alert Peminjaman"
        ]);
    }
}
