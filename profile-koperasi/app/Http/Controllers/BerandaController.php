<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\MediaSosial;

class BerandaController extends Controller
{
    public function index()
    {
        //mengambil testimoni yang active sebanyak 3 item
        $testimonis = Testimoni::where('is_active', 1)->take(3)->get();

        //mengambil galeri sebanyak 4 item
        $galeris = Galeri::take(4)->get();

        //mengambil berita terbari yang active sbanyak 3 item
        $beritas = Berita::where('is_active')
            ->take(3)
            ->latest()
            ->get();

        //mengambil kontak dan sosmed yang active hanya 1 item
        $kontaks = Kontak::where('is_active', 1)->latest()->first();
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();

        //menampilkan halaman beranda dengan data yang telah diambil
        return view('pages.home', compact('testimonis', 'galeris', 'beritas', 'kontaks', 'sosmed'));
    }
}
