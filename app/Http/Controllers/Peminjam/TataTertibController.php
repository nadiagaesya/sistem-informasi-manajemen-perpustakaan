<?php

namespace App\Http\Controllers\Peminjam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TataTertibController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('peminjam/tata-tertib/index');
    }
}
