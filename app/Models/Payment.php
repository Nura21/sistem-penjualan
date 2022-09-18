<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = "payments";

    protected $fillable = [
        'tgl_bayar',
        'total_bayar',
        'transaction_id',
    ];

    public function transactionQuantity(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function transactionKeterangan(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
