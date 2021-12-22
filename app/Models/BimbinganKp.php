<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BimbinganKp extends Model
{
    use HasFactory;

    public $table = 'bimbingan_kp';
    
    protected $fillable = [
        'dosen_id',
        'tahun_ajaran',
        'mahasiswa_id',
    ];

    public function dosen(){
        return $this->belongsTo('App/Models/DetailDosen', 'dosen_id','id');
    }

    public function mahasiswa(){
        return $this->belongsTo('App/Models/DetailMahasiswa', 'mahasiswa_id','id');
    }

    public function dosen_pembimbing(){
        return $this->belongsToMany('App\Models\BimbinganKp', 'dosen_id');
    }

    public function mahasiswa_bimbingan(){
        return $this->belongsToMany('App\Models\BimbinganKp', 'mahasiswa_id');
    }
}
