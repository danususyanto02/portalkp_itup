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
        'nama',
        'alamat',
        'no_telpon',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'dospem_id'

    ];

    //relasi data mhw ke user
    public function user(){
        return $this->belongsTo('App/Models/User', 'user_id','id');
    }
    
    //relasi bimbingan kp
    public function dosen(){
        return $this->belongsTo('App\Models\Dosen' ,  'dospem_id','id');
    }


}
