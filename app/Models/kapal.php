<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tiketkapal;

class kapal extends Model
{
    use HasFactory;
    protected $table = "kapal";
    protected $fillable =[
        'id',
        'kode_kapal',
        'nama_kapal',
        'kode_rute'
    ];
    public function tiketkapal()
    {
        return $this->hasMany(tiketkapal::class);
    }
}
