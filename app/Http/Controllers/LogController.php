<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function logout(Request $req)
    {
        Auth::logout();
        return redirect('/');
    }
}
