<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class ProfilController extends Controller
{
    public function index()
    {
        return view('admin.profil.index');
    }

    public function edited(Request $req)
    {
        $data = User::where('id', Auth::user()->id)->first();
        $data->email = $req->username;
        $data->save();
        return redirect()->back()->with('pesan', 'Berhasil Mengganti Username Anda');
    }

    public function pass()
    {
        return view('admin.profil.password');
    }

    public function change(Request $req)
    {
        $this->validate($req, [
            'old_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'same:password'
        ]);

        $data = User::find(Auth::user()->id);
        $old_password = Hash::check($req->input('old_password'), $data->password);

        if ($old_password) {
            $data->update([
                'password' => Hash::make($req->input('password')),
            ]);
            return redirect()->back()->with('pesan', 'Berhasil Mengubah Password Akun Anda');
        }
        else{
            return redirect()->back()->with('eror', 'Password Lama yang anda masukkan tidak sesuai');
        }
    }
}
