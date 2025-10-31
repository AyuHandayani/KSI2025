<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Mengembalikan view greeting (opsional)
    public function greeting()
    {
        return view('greeting', ['name' => 'Ayu']);
    }

    // Menampilkan halaman user berdasarkan id
    public function show($id)
    {
        // contoh: kita hanya kirim id ke view
        // jika ingin ambil dari DB, gunakan model User: User::findOrFail($id)
        return view('user.profile', ['id' => $id]);
    }
}
