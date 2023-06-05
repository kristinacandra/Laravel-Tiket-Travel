<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tiketpesawat;
use App\Models\tiketkapal;
use App\Models\tiketkereta;

class kota extends Model
{
    use HasFactory;
    protected $table = "kota";
    protected $fillable =[
        'id',
        'kode_kota',
        'kota_asal',
        'kota_tujuan'
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
