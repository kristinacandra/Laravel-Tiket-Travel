<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tiketpesawat;
use App\Models\tiketkapal;
use App\Models\tiketkereta;

class jadwal extends Model
{
    use HasFactory;
    protected $table = "jadwals";
    protected $fillable =[
        'id',
        'tanggal_keberangkatan',
        'waktu_keberangkatan',
        'tanggal_tiba',
        'waktu_tiba'
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
