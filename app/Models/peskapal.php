<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peskapal extends Model
{
    use HasFactory;
    protected $table = "peskapal";
    protected $fillable =[
        'id',
        'id_pesanan',
        'id_tiket',
        'harga'
    ];
}
