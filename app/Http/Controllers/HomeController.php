<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function register()
    {
        return view('halaman.register');
    }

    public function kirim(Request $request)
    {
        $namaDepan = $request['namaDepan'];
        $namaBelakang = $request['namaBelakang'];

        return view('halaman.welcome', ['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);

    }
}
