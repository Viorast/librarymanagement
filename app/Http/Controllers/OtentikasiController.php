<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtentikasiController extends Controller
{
    public function index()
    {
        return view('otentikasi.register');
    }
}
