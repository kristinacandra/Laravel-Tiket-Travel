<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tiketpesawat;

class maskapai extends Model
{
    use HasFactory;
    protected $table = "maskapai";
    protected $fillable =[
        'id',
        'kode_maskapai',
        'nama_maskapai',
        'kode_rute'
    ];

    public function tiketpesawat()
    {
        return $this->hasMany(tiketpesawat::class);
    }

}
