<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_audit extends Model
{
     protected $table = 'table_jadwal_audit';
  protected $primaryKey = 'id_jadwal_audit';
  protected $fillable = ['keterangan','dokumen'];
}
