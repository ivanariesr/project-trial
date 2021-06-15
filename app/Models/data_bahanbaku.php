<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_bahanbaku extends Model
{
    use HasFactory;
    protected $fillable = [
        'suplier',
        'nama_bahan',
        'kode_bahan',
        'satuan_bahan',
        'jumlah',
        'harga',
        'ket',
    ];    
}
