<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kapal;
use App\Models\jadwal;
use App\Models\kota;
use App\Models\pengguna;

class tiketkapal extends Model
{
    use HasFactory;
    protected $table = "tiketkapal";
    protected $guarded =[];

    public function kapal()
    {
        return $this->belongsTo(kapal::class,'id_kapal','id');
    }

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class,'id_jadwal','id');
    }

    public function kota()
    {
        return $this->belongsTo(kota::class,'id_kota','id');
    }

    public function pengguna()
    {
        return $this->belongsTo(pengguna::class,'id_pengguna','id');
    }
}