<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'nama_gallery',
        'gambar_gallery',
        'tanggal_gallery'
    ];
}