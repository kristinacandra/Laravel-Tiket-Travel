<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\tiketkereta;

class kereta extends Model
{
    use HasFactory;
    protected $table = "kereta";
    protected $fillable =[
        'id',
        'kode_kereta',
        'nama_kereta',
        'kode_rute'
    ];
    public function tiketkereta()
    {
        return $this->hasMany(tiketkereta::class);
    }
}
