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
        'is_active',
    ];
    protected $casts = [
        'is_active' => 'boolean',
        'misi' => 'array',
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
