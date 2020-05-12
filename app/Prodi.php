<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
<<<<<<< HEAD
  protected $table = 'prodi';
  protected $primaryKey = 'id_prodi';
=======
  protected $table = 'table_prodi';
  protected $primaryKey = 'id';
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
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
<<<<<<< HEAD
   public function jadwal()
=======
  public function jadwal()
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
  {
    return $this->hasMany(Jadwal::class);
  }
}
