<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::where('role_id', [1,2,4])->get();
        return view('admin.user.index', compact('data'));
    }

    public function delete($id)
    {
        $parameter = Crypt::decrypt($id);

        $data = User::where('id', $parameter)->delete();
        return redirect()->back()->with('pesan', 'Berhasil Menghapus Akun');;
    }
}
