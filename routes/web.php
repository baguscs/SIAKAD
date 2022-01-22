<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\UserController;
use App\Models\Kegiatan;
use App\Models\Pengguna;
use App\Models\User;
use App\Models\Struktur;
use App\Models\Wali;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Daftar;
use App\Models\Fasilitas;
use App\Models\Prestasi;
use App\Models\Ekstra;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = Kegiatan::orderBy('id','desc')->limit(6)->get();
    return view('user.index', compact('data'));
});

Route::get('logout', [LogController::class, 'logout'])->name('logout');

Route::prefix('')->group(function () {
    Route::get('index', [PageController::class, 'index'])->name('index');
    Route::get('about-us', [PageController::class, 'about'])->name('about');
    Route::get('structure', [PageController::class, 'organ'])->name('organ');
    Route::get('facilities', [PageController::class, 'items'])->name('items');
    Route::get('extracurricular', [PageController::class, 'ekstra'])->name('ekstra');
    Route::get('achievements', [PageController::class, 'medal'])->name('medals');
    Route::get('activities', [PageController::class, 'kegiatan'])->name('kegiatan');
    Route::get('teacher', [PageController::class, 'guru'])->name('guru');
    Route::get('employees', [PageController::class, 'karyawan'])->name('karyawan');
    Route::get('registration', [PageController::class, 'daftar'])->name('daftar');
    Route::get('registration-form', [PageController::class, 'form'])->name('form');
    Route::post('registration-form/post', [RegistrationController::class, 'regis'])->name('regis');
    Route::prefix('')->group(function () {
        Route::get('students/{grade}', [PageController::class, 'kelas'])->name('kelas');
        Route::get('students/{grade}/{kelas}', [PageController::class, 'siswa'])->name('siswa');
    });
    Route::get('login-page', [PageController::class, 'login'])->name('masuk');
});

Route::middleware(['auth', 'revalidate'])->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
        $akun = User::all()->count();
        $organ = Struktur::all()->count();
        $pengguna = Pengguna::all()->count();
        $wali = Wali::all()->count();
        $kelas = Kelas::all()->count();
        $mapel = Mapel::all()->count();
        $siswa = Siswa::all()->count();
        $daftar = Daftar::all()->count();
        $items = Fasilitas::all()->count();
        $medals = Prestasi::all()->count();
        $activ = Kegiatan::all()->count();
        $ekstra = Ekstra::all()->count();
        return view('admin.index', compact('akun', 'organ', 'pengguna', 'wali', 'kelas', 'mapel', 'siswa', 'daftar', 'items', 'medals', 'activ', 'ekstra'));
    })->name('dashboard');
    
    Route::prefix('profil')->group(function () {
        Route::get('edit-profile', [ProfilController::class, 'index'])->name('profil');
        Route::post('edit-profile/post', [ProfilController::class, 'edited'])->name('edited');
        Route::get('change-password', [ProfilController::class, 'pass'])->name('pass');
        Route::post('change-password/post', [ProfilController::class, 'change'])->name('change_password');
    });

    Route::prefix('users')->group(function () {
        Route::get('all-users', [UserController::class, 'index'])->name('users');
        Route::post('all-users/delete/{id}', [UserController::class, 'delete'])->name('del_user');
    });

    Route::prefix('employees')->group(function () {
        Route::get('all-data', [PenggunaController::class, 'index'])->name('pegawai');
    });
});

