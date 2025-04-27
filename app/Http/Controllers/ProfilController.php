<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'nama' => 'akhdan',
            'nim' => '102042300077',
            'prodi' => 'Sistem Informasi',
            'email' => 'akhdan.anargya@gmail.com',
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
