<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stuff;
use App\Models\Client;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";

    protected $fillable = [
        'stuff_id',
        'client_id',
        'tanggal',
        'keterangan',
        'quantity'
    ];

    public function stuffName(){
        return $this->belongsTo(Stuff::class, 'stuff_id', 'id');
    }

    public function clientName(){
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

}
