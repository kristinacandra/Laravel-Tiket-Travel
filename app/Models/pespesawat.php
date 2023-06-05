<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pespesawat extends Model
{
    use HasFactory;
    protected $table = "pespesawat";
    protected $fillable =[
        'id',
        'id_pesanan',
        'id_tiket',
        'harga'
    ];
}
