<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MediaSosial extends Model
{
    use HasFactory;

    protected $table = 'media_sosial';

    protected $fillable = [
        'link_instagram',
        'link_x',
        'link_facebook',
        'link_tiktok',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}