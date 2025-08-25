<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = [
        'nama_merchandise',
        'gambar_merchandise',
        'harga_merchandise',
        'deskripsi_merchandise',
    ];
}