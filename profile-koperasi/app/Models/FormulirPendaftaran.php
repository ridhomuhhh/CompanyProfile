<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormulirPendaftaran extends Model
{
    use HasFactory;

    // definisikan nama tabel
    protected $table = 'formulir_pendaftaran';

    protected $fillable = [
        'nama_formulir',
        'link_formulir',
        'tanggal',
        'user_id',
    ];
    protected $casts = [
        'tanggal' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}