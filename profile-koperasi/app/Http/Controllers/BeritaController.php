<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kontak;
use App\Models\MediaSosial;

class BeritaController extends Controller
{
    public function index()
    {
        $allBerita = Berita::where('is_active', 1)->latest()->get();

        $kontaks = Kontak::where('is_active', 1)->latest()->first();
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();

        return view('pages.berita', compact('allBerita', 'kontaks', 'sosmed'));
    }
    public function detailBerita($slug)
    {
        $berita = Berita::where('slug', $slug)->where('is_active', 1)->first();
        $recentPosts = Berita::where('is_active', 1)
            ->where('id', '!=', $berita->id)
            ->latest()
            ->take(5)
            ->get();

        if (!$berita) {
            abort(404);
        }

        $kontaks = Kontak::where('is_active', 1)->latest()->first();
        $sosmed = MediaSosial::where('is_active', 1)->latest()->first();

        return view('pages.news-detail', compact('berita', 'kontaks', 'sosmed', 'recentPosts'));
    }
}
