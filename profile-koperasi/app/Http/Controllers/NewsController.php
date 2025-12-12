<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class NewsController extends Controller
{
    /**
     * PUSAT DATA DUMMY
     * Nanti fungsi ini diganti dengan pemanggilan Database.
     */
    private function getDummyArticles()
    {
        return collect([
            (object)[
                'id' => 1,
                'title' => 'Koperasi TSM Sukses Menyelenggarakan RAT Tahun 2024',
                'slug' => 'rat-2024', // Slug ini kuncinya
                'excerpt' => 'Sebagai bentuk transparansi, Koperasi TSM telah menggelar Rapat Anggota Tahunan di Surabaya pada tanggal 27 Maret 2025.',
                // Konten lengkap (HTML)
                'content' => '
                    <p class="lead">Surabaya – Koperasi Temprina Sejahtera Mandiri (TSM) kembali menunjukkan komitmennya terhadap transparansi dengan sukses menyelenggarakan Rapat Anggota Tahunan (RAT) untuk tahun buku 2024.</p>
                    <p>Acara yang digelar di Surabaya pada tanggal 27 Maret 2025 ini dihadiri oleh jajaran pengurus, pengawas, serta perwakilan anggota. Ketua Koperasi, Bapak Turikan, memaparkan pencapaian positif koperasi sepanjang tahun lalu.</p>
                    <h4>Poin Penting RAT:</h4>
                    <ul>
                        <li>Pembagian SHU yang meningkat 10% dari tahun lalu.</li>
                        <li>Rencana digitalisasi layanan simpan pinjam.</li>
                        <li>Peningkatan plafon pinjaman bagi anggota.</li>
                    </ul>
                    <p>Acara ditutup dengan ramah tamah dan pembagian doorprize menarik bagi anggota yang hadir.</p>
                ',
                'image' => 'https://placehold.co/800x400/003366/FFF?text=RAT+2024',
                'category' => 'Kegiatan',
                'published_at' => '2025-03-27'
            ],
            (object)[
                'id' => 2,
                'title' => 'Koperasi TSM Resmi Menempati Kantor Baru',
                'slug' => 'kantor-baru',
                'excerpt' => 'Untuk meningkatkan pelayanan, kami pindah ke kantor baru yang lebih representatif dan nyaman bagi anggota.',
                'content' => '
                    <p class="lead">Kabar gembira bagi seluruh anggota! Mulai tahun 2020, Koperasi TSM resmi beroperasi di gedung baru.</p>
                    <p>Lokasi baru ini dipilih untuk memberikan kenyamanan lebih dalam pelayanan administrasi dan konsultasi anggota. Kantor baru dilengkapi dengan ruang tunggu yang nyaman, ruang meeting, dan area parkir yang luas.</p>
                    <p>Alamat baru kami berada di Jl. Karah Agung No.45, Surabaya. Kami mengundang seluruh anggota untuk berkunjung.</p>
                ',
                'image' => 'https://placehold.co/800x400/ced4da/white?text=Kantor+Baru',
                'category' => 'Info',
                'published_at' => '2020-01-01'
            ],
            (object)[
                'id' => 3,
                'title' => 'Program Pendidikan Perkoperasian untuk Anggota',
                'slug' => 'pendidikan-anggota',
                'excerpt' => 'Sesuai prinsip koperasi, kami rutin melaksanakan pendidikan untuk meningkatkan kemampuan anggota.',
                'content' => '
                    <p>Pendidikan adalah salah satu prinsip dasar koperasi. Oleh karena itu, Koperasi TSM rutin mengadakan pelatihan kewirausahaan dan manajemen keuangan.</p>
                    <p>Tujuan dari program ini adalah agar anggota tidak hanya meminjam modal, tetapi juga memiliki kemampuan untuk mengelola modal tersebut agar usahanya berkembang.</p>
                ',
                'image' => 'https://placehold.co/800x400/ced4da/white?text=Pendidikan',
                'category' => 'Edukasi',
                'published_at' => '2025-01-15'
            ],
        ]);
    }

    // 1. Logika Halaman List Berita
    public function index()
    {
        $data = $this->getDummyArticles();

        // Paginasi Manual (Agar codingan view tidak error saat panggil ->links())
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentItems = $data->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
        $articles = new LengthAwarePaginator($currentItems, count($data), $perPage);
        $articles->setPath(request()->url());

        // Arahkan ke view list berita
        return view('pages.artikel', compact('articles'));
    }

    // 2. Logika Halaman Baca Berita (Detail)
    public function show($slug)
    {
        // Cari artikel yang slug-nya cocok dengan yang diklik user
        $article = $this->getDummyArticles()->firstWhere('slug', $slug);

        // Jika slug ngawur/tidak ditemukan, tampilkan error 404
        if (!$article) {
            abort(404);
        }

        // Ambil berita lain untuk sidebar (kecuali yang sedang dibaca)
        $recent_news = $this->getDummyArticles()->where('slug', '!=', $slug)->take(3);

        // Arahkan ke view detail berita
        return view('pages.news-detail', compact('article', 'recent_news'));
    }
}