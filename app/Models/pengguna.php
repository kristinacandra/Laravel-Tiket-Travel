<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tiketpesawat;
use App\Models\tiketkapal;
use App\Models\tiketkereta;

class pengguna extends Model
{
    use HasFactory;
    protected $table = "pengguna";
    protected $fillable =[
        'id',
        'id_pengguna',
        'nama_pengguna',
        'alamat',
        'no_telp'
    ];

    public function tiketpesawat()
    {
        return $this->hasMany(tiketpesawat::class);
    }
    public function tiketkapal()
    {
        return $this->hasMany(tiketkapal::class);
    }
    public function tiketkereta()
    {
        return $this->hasMany(tiketkereta::class);
    }
}
