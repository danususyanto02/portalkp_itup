<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailDosen extends Model
{
    use HasFactory;

    public $table = 'detail_dosen';

    protected $fillable = [
        'users_id',
        'no_telpon',
    ];

    public function user(){
        return $this->belongsTo('App/Models/User', 'user_id','id');
    }

    public function bimbingan_kp(){
        return $this->hasMany('App\Models\BimbinganKp', 'dosen_id');
    } 
}
