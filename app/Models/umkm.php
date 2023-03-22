<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkm extends Model
{
    protected $table = 'umkm';
    protected $primarykey = 'id';
    public  $timestamps = true;
    protected $fillable = [
        'nama_umkm',
        'id_user',
        'profil_url',
        'gambar_umkm',
        'detail_umkm',
        'alamat_umkm',
        'motto_umkm',
    ];
}
