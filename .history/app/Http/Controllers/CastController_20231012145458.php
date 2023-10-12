<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CastController extends Controller
{
    
    public function create()
    {
        return view('cast.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:post',
            'umur' => 'required',
            'bio' => 'bio',
        ]);
        $query = DB::table('post')->insert([
            "nama" => $request["nama"],
            "umur" => $request["umur"]
        ]);
        return redirect('/posts');
    }
}
