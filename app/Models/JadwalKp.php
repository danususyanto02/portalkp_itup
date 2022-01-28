<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKp extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan', 'daritanggal', 'sampaitanggal'
    ];

    public function pengirim(){
        return $this->belongsTo('App/Models/User', 'users_id','id');
    }
}
