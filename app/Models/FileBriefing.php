<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileBriefing extends Model
{
    use HasFactory;
    public $table='filebriefing';
    protected $fillable=['users_id','nama','file'];

    public function pengirim(){
        return $this->belongsTo('App/Models/User', 'users_id','id');
    }
}
