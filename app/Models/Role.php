<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $table = 'role';
    protected $fillable = ['jenis_role'];

    public function user(){
        return $this->hasOne('App\Models\User', 'role_id');
    }
}
