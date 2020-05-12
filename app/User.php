<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'nip', 'nama',  'email', 'password', 'level', 'foto', 
=======
        'nip', 'nama',  'email', 'password', 'level', 'foto',
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAvatar()
    {
        if (!$this->foto) {
            return asset('images/profile.png');
        }
        return asset('images/.$this->foto');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
<<<<<<< HEAD
    }
    public function userslvl()
    {
        return $this->belongsTo(Users_lvl::class, 'level');
=======
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
    }
}
