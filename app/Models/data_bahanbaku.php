<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_bahanbaku extends Model
{
    use HasFactory;
    protected $fillable = [
        'suplier',
        'nama_bahan_baku',
        'kode_bahan_baku',
        'satuan_bahan_baku',
        'jumlah_bahan_baku',
        'harga',
        'ket',
    ];    
}
