<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Agar route menggunakan 'slug' bukan 'id' secara default
    public function getRouteKeyName()
    {
        return 'slug';
    }
}