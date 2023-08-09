<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required|max:255",
            "tempatlahir" => "required|max:255",
            "tanggallahir" => "required|date",
            "alamat" => "required|max:255",
            "pekerjaan" => "required|max:255",
            "notelp" => "required|max:20",
            "jmlkeluarga" => "required|numeric",
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:5|max:255"
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login Kembali');
    }
}
