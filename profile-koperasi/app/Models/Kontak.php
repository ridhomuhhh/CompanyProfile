<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kontak extends Model
{
    use HasFactory;
    protected $table = 'kontak';

    protected $fillable = [
        'user_id',
        'alamat',
        'telepon',
        'email',
        'maps',
        'jam_operasional',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}