<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $nama = "Akhdan";
        $jam = date("H");

        $salam = match (true) {
            $jam >= 5 && $jam < 12 => 'Selamat Pagi',
            $jam >= 12 && $jam < 15 => 'Selamat Siang',
            $jam >= 15 && $jam < 18 => 'Selamat Sore',
            default => 'Selamat Malam',
        };

        $waktuAkses = date('H:i:s'); // Menyimpan waktu akses saat ini

        return view('dashboard', compact('nama', 'salam', 'waktuAkses'));
    }
}
