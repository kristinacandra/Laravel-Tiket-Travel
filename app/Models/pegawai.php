<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawai";
    protected $fillable =[
        'id',
        'id_pegawai',
        'nama_pegawai',
        'jabatan',
        'id_pesanan'
    ];
}
