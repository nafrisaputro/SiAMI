<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
     protected $primaryKey = 'id_jurusan';
    protected $fillable = ['nama_jurusan'];

    public function prodi()
    {
        return $this->hasMany(Prodi::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
