<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPejabatProdi extends Model
{
    use HasFactory;
    public $table = 'detail_pejabat_prodi';

    protected $fillable = [
        // 'users_id',
        // 'nomor_induk',
        // 'role'
    ];
}
