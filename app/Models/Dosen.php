<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
 

    public $table = 'dosen';

    protected $fillable = [
        'nama',
        'no_telpon',
        'users_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User', 'users_id','id');
    }

    // public function keuser(){
    //     return $this->hasOne('App\Models/User', 'users_id','id');
    // }




    //relasi bimbingan kp
    public function dospem(){
        return $this->hasOne('App\Models\DetailMahasiswa', 'dospem_id');
    } 
    

    // public function jumlahbimbingan(){
    //     return $this->dospem()->join('dosen', '');
    // }

    // public function relasidosen(){
    //     return $this->hasManyThrough(DetailMahasiswa::class, Dosen::class);
    // }
    
}
