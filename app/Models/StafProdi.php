<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StafProdi extends Model
{
    use HasFactory;

    public $table = 'stafprodi';

    protected $fillable = [
        'nama',
        'users_id',
    ];

    public function user(){
        return $this->belongsTo('App/Models/User', 'user_id','id');
    }
}
