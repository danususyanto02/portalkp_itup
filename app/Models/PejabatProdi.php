<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PejabatProdi extends Model
{
    use HasFactory;
    public $table = 'pejabatprodi';

    protected $fillable = [

        'nama',
        'jabatan',
        'users_id',
    ];
}
