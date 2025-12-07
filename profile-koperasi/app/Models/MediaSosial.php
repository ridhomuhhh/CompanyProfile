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
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
    ];
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Cek: Apakah data ini sedang diset menjadi AKTIF (true)?
            if ($model->is_active) {
                // Jika YA, maka matikan (false) semua data lain selain yang ini
                static::where('id', '!=', $model->id)->update(['is_active' => false]);
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
