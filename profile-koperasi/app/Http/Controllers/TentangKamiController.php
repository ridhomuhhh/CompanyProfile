<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\MediaSosial;
use App\Models\TentangKami;
use App\Models\StrukturOrganisasi;

class TentangKamiController extends Controller
{
    public function index()
    {
        $tentangKami = TentangKami::where('is_active', 1)->latest()->first();

        $kontaks = Kontak::where('is_active', 1)->latest()->first();
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();

        $struktur = StrukturOrganisasi::where('is_active', 1)->get();

        return view('pages.about', compact('kontaks', 'sosmed', 'tentangKami', 'struktur'));
    }
}
