<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileBriefing extends Model
{
    use HasFactory;
    public $table='filebriefing';
    protected $fillable=['nama','file'];
}
