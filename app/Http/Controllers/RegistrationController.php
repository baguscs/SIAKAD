<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Daftar;
use File;

class RegistrationController extends Controller
{
    public function regis(Request $req)
    {
        $message =[
            'mimes' => 'Extensi file tidak sesuai ketentuan',
            'max' => 'Size file melebihi batas',
            'required' => 'Bagian ini wajib diisi',
        ];

        $this->validate($req, [
            'skhun' => 'file|mimes:jpg,jpeg,png|max:400',
            'akta' => 'file|mimes:jpg,jpeg,png|max:400'
        ],$message);

        $add = new Daftar;

        $add->nama = $req->nama;
        $add->nisn = $req->nisn;
        $add->asal = $req->asal;
        $add->nilai = $req->nilai;

        $skhun = $req->file('skhun');
        $nameSkhun = time()."_".$skhun->getClientOriginalName();
        $locSkhun = 'storage/skhun';
        $skhun->move($locSkhun, $nameSkhun);
        $add->skhun = $nameSkhun;

        $akta = $req->file('akta');
        $nameAkta = time()."_".$akta->getClientOriginalName();
        $locAkta = 'storage/akta';
        $akta->move($locAkta, $nameAkta);
        $add->akta = $nameAkta;

        $add->save();

        return redirect()->route('daftar')->with('pesan', "Data Siswa ".$req->nama." Telah Tekirim.");
    }
}
