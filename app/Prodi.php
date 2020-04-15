<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = 'table_prodi';
    protected $fillable = ['nama_prodi', 'id_jurusan'];

    public function jurusan()
    {
        return $this->belongsTo('\App\Jurusan');
    }
      public function user()
    {
        return $this->hasMany(User::class);
    }
      public function ptpp()
    {
        return $this->hasMany(Ptpp::class);
    }
      public function form2()
    {
        return $this->hasMany(Form2::class);
    }
}
