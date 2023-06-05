<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peskereta extends Model
{
    use HasFactory;
    protected $table = "peskereta";
    protected $fillable =[
        'id',
        'id_pesanan',
        'id_tiket',
        'harga'
    ];
}
