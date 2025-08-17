<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'nama_event',
        'gambar_event',
        'tanggal_event',
        'deskripsi_event',
        'lokasi_event',
    ];
}