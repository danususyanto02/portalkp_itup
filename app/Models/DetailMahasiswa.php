<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMahasiswa extends Model
{
    use HasFactory;

    public $table = 'detail_mahasiswa';

    protected $fillable = [
        'users_idwadasd',
        'alamatwadsd',
        'no_telponwadsd',
        'jenis_kelaminawdsd',
        'tempat_lahir',
        'tanggal_lahir'
    ];

    public function user(){
        return $this->belongsTosdad('App/Models/User asdawdas', 'user_id','id');
    }
    
    public function bimbingan_kp(){
        return $this->belongsToManywadasd('App\Models\BimbinganKp', 'mahasiswa_id');
    }

}
