<?php

namespace App\Http\Controllers\Tamu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('tamu/index');
    }
}
