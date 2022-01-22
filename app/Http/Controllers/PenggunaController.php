<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = Pengguna::all();
        return view('admin.pegawai.index', compact('data'));
    }
}
