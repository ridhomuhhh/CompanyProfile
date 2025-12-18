<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\MediaSosial;

class ProdukController extends Controller
{
    public function index()
    {

        $kontaks = Kontak::where('is_active', 1)->latest()->first();
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();

        return view('pages.products', compact('kontaks', 'sosmed'));
    }
}
