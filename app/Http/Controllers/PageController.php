<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use App\Models\Daftar;
use App\Models\Fasilitas;
use App\Models\Ekstra;
use App\Models\Prestasi;
use App\Models\Kegiatan;
use App\Models\Siswa;

class PageController extends Controller
{
    public function index()
    {
        $data = Kegiatan::orderBy('id','desc')->limit(6)->get();
        return view('user.index', compact('data'));
    }

    public function about()
    {
        $data = Pengguna::where('struktur_id', 1)->get();
        return view('user.about', compact('data'));
    }

    public function organ()
    {
        $data = Pengguna::whereNotNull('struktur_id')->get();
        return view('user.organ', compact('data'));
    }
    
    public function items()
    {
        $data = Fasilitas::all();
        return view('user.items', compact('data'));
    }

    public function ekstra()
    {
        $data = Ekstra::all();
        return view('user.ekstra', compact('data'));
    }

    public function medal()
    {
        $data = Prestasi::all();
        return view('user.medal', compact('data'));
    }

    public function kegiatan()
    {
        $data = Kegiatan::all();
        return view('user.kegiatan', compact('data'));
    }

    public function guru()
    {
        $head = "Guru";
        $hero = "img/hero9.jpg";
        $data = Pengguna::where('tugas', 'Guru')->get();
        return view('user.pegawai', compact('head', 'hero', 'data'));
    }

    public function karyawan()
    {
        $head = "Karyawan";
        $hero = "img/hero10.jpg";
        $data = Pengguna::where('tugas', 'Karyawan')->get();
        return view('user.pegawai', compact('head', 'hero', 'data'));
    }

    public function daftar()
    {
        $data = Daftar::orderBy("nilai", "desc")->get();
        $count = Daftar::all()->count();
        $number = 1;
        return view('user.daftar', compact('data', 'count', 'number'));
    }

    public function form()
    {
        return view('user.form');
    }

    public function kelas($grade)
    {
        $key = $grade;
        $hero = "../img/hero13.jpg";
        return view('user.kelas', compact('key', 'hero'));
    }

    public function siswa($grade,$kelas)
    {
        $key = $grade.$kelas;
        $define = $grade;
        $hero = "../../img/hero13.jpg";
        $data = Siswa::where('kelas', $key);
        return view('user.siswa', compact('key', 'hero', 'define', 'data'));
    }

    public function login()
    {
        return view('auth.login');
    }
}
