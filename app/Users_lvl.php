<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_lvl extends Model
{
    protected $table = 'users_lvl';
     protected $primaryKey = 'id_lvl';
    protected $fillable = ['jabatan'];

    public function userlvl()
    {
        return $this->hasMany(User::class);
    }
}
