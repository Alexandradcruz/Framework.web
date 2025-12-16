<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'nomor_anggota';
    public $timestamps = false;

    public $incrementing = false;     // WAJIB kalau PK bukan int
    protected $keyType = 'string';    // WAJIB kalau PK string

    protected $fillable = [
        'nomor_anggota',
        'nama',
        'alamat',
        'email',
        'tanggal_lahir'
    ];
}
