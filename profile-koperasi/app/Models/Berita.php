<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    use HasFactory;

    // definisikan nama tabelnya
    protected $table = 'berita';

    protected $fillable = [
        'judul_berita',
        'slug',
        'isi_berita',
        'gambar',
        'tanggal',
        'user_id',
    ];

    /**
     * Casting 'tanggal' agar otomatis jadi objek Carbon (bisa diformat tgl)
     */
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}