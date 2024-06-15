<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('peminjam/visi-misi/index');
    }
}
