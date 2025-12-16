<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MtrKendaraan;

class MtrKendaraanController extends Controller
{
    public function index()
    {
        $data = MtrKendaraan::with(['model', 'warna'])->get();

        return view('mtrkendaraan.index', compact('data'));
    }
}
