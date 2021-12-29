<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritaprodi extends Model
{
    use HasFactory;

    public $table = 'beritaprodi';
    
    protected $fillable = [
        'users_id',
        'info_berita',
    ];

    public function pengirim(){
        return $this->belongsTo('App/Models/User', 'user_id','id');
    }
}
