<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;

    protected $table = 'aduans';

    protected $fillable = [
        'nama',
        'jenis_aduan',
        'waktu_kejadian',
        'lokasi_kejadian', // Akan menyimpan alamat yang dibaca manusia
        'latitude',        // NEW: Menyimpan Latitude
        'longitude',       // NEW: Menyimpan Longitude
        'isi_laporan',
        'bukti',
        'status',
    ];

    protected $casts = [
        'waktu_kejadian' => 'datetime',
    ];
}