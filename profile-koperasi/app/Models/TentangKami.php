<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TentangKami extends Model
{
    use HasFactory;

    // WAJIB: Karena nama tabel terdiri dari 2 kata dan B.Indo
    protected $table = 'tentang_kami';

    protected $fillable = [
        'user_id',
        'sejarah',
        'visi',
        'misi',
        'legalitas_hukum',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}