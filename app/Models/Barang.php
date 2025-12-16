<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'kode_barang',
        'harga_barang',
        'gambar',
    ];public function getGambarUrlAttribute()
    {
        return url("/uploads/barangs/" . basename($this->gambar));
    }
 
 
}
// bagi pengguna fillable, bagi pengguna protected $guarded = []; tidak perlu

