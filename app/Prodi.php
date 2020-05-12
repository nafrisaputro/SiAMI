<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
  protected $table = 'prodi';
  protected $primaryKey = 'id_prodi';
  protected $fillable = ['nama_prodi', 'id_jurusan'];

  public function jurusan()
  {
    return $this->belongsTo(Jurusan::class, 'id_jurusan');
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
   public function jadwal()
  {
    return $this->hasMany(Jadwal::class);
  }
}
