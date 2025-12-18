<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\MediaSosial;

class KontakController extends Controller
{
    public function index()
    {
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();
        $kontaks = Kontak::where('is_active', 1)->latest()->first();

        //menampilkan halaman beranda dengan data yang telah diambil
        return view('pages.kontak', compact('kontaks', 'sosmed'));
    }
}
