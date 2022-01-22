<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beritakp extends Model
{
    use HasFactory;

    public $table = 'beritakp';
    
    protected $fillable = [
        'users_id',
        'info_berita',
    ];

    public function pengirim(){
        return $this->belongsTo('App/Models/User', 'users_id','id');
    }
    
}
