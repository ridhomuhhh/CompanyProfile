<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;
use App\Models\Galeri;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\MediaSosial;
use App\Models\TentangKami;
use App\Models\StrukturOrganisasi;
use App\Models\Article;
use App\Models\FormulirPendaftaran;

class BerandaController extends Controller
{
    public function index()
    {
        //mengambil testimoni yang active sebanyak 3 item
        $testimonis = Testimoni::where('is_active', 1)
            ->latest()
            ->take(3)
            ->get();

        //mengambil galeri sebanyak 4 item
        $galeris = Galeri::where('is_active', 1)
            ->latest()
            ->take(4)
            ->get();

        //mengambil berita terbari yang active sbanyak 3 item
        $beritas = Berita::where('is_active', 1)
            ->latest()
            ->take(3)
            ->get();

        //mengambil kontak dan sosmed yang active hanya 1 item
        $kontaks = Kontak::where('is_active', 1)->latest()->first();
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();

        // Tentang Kami 
        $tentangKami = TentangKami::where('is_active', 1)->latest()->first();

        // Struktur Organisasi 
        $struktur = StrukturOrganisasi::where('is_active', 1)->get();       

        // Artikel 
        $articles = Article::where('is_active', 1)
            ->latest()
            ->take(3)
            ->get();

        // Formulir pendaftaran 
        $formulir = FormulirPendaftaran::where('is_active', 1)->latest()->first();

        //menampilkan halaman beranda dengan data yang telah diambil
        return view('pages.home', compact(
            'tentangKami',
            'struktur',
            'testimonis',
            'galeris',
            'beritas',
            'articles',
            'kontaks',
            'sosmed',
            'formulir'
        ));
    }
}
