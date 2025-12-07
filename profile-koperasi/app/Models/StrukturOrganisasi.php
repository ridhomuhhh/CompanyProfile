<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StrukturOrganisasi extends Model
{
    use HasFactory;

    /**
     * Wajib didefinisikan nama tabel
     */
    protected $table = 'struktur_organisasi';

    protected $fillable = [
        'deskripsi',
        'nama_anggota',
        'jabatan',
        'foto',
        'user_id',
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    /**
     * Relasi ke User (Admin)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
