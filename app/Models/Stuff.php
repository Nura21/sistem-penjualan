<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    use HasFactory;

    protected $table = "stuffs";

    protected $fillable = [
        'nama_barang',
        'harga',
        'stok',
        'supplier_id'
    ];
}
