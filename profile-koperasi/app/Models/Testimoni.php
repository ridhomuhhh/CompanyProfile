<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimoni extends Model
{
    use HasFactory;

    // definisikan nama tabelnya
    protected $table = 'testimoni';

    protected $fillable = [
        'nama',
        'pekerjaan',
        'isi',
        'foto',
        'user_id',
    ];

    /**
     * Relasi: Testimoni ini dibuat/diinput oleh User siapa?
     * (Sisi "Child" -> BelongsTo)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}