<?php

namespace App\Models;
use App\Models\PejabatProdi;
use App\Models\StafProdi;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'email',
        'password',
        'nomor_induk',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    //relasi data user
    public function detail_mahasiswa(){
        return $this->hasOne('App\Models\DetailMahasiswa', 'users_id');
    }

    public function dosen(){
        return $this->hasOne('App\Models\Dosen', 'users_id');
    }

    public function stafprodi(){
        return $this->hasOne('App\Models\StafProdi', 'users_id');
    }
    public function pejabatprodi(){
        return $this->hasOne('App\Models\PejabatProdi', 'users_id');
    }

    //role
    public function role(){
        return $this->belongsTo('App\Models\Role' ,  'role_id','id');
    }

    //berita
    public function beritakp(){
        return $this->hasMany('App\Models\Beritakp', 'users_id');
    }

    public function beritaprodi(){
        return $this->hasMany('App\Models\Beritakp', 'users_id');
    }
}
