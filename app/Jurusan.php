<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'table_jurusan';
    protected $fillable = ['nama_jurusan'];

    public function prodi()
    {
        return $this->hasMany('\App\Prodi');
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
