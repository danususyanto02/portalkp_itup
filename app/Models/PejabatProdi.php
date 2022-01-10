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
        'no_telpon',
        'jabatan',
        'users_id',
    ];
}
