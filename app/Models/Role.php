<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $table = 'role';
    protected $fillable = ['name'];

    public function role_user(){
        return $this->hasMany('App\Models\DetailMahasiswa', 'users_id');
    }
}
