<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMahasiswa extends Model
{
    use HasFactory;

    public $table = 'detail_mahasiswa';

    protected $fillable = [
        'users_id',
        'alamat',
        'no_telpon',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir'
    ];

    public function user(){
        return $this->belongsTo('App/Models/User', 'user_id','id');
    }
    
    public function bimbingan_kp(){
        return $this->belongsToMany('App\Models\BimbinganKp', 'mahasiswa_id');
    }

}
