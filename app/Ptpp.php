<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ptpp extends Model
{
	protected $table = 'table_ptpp';
<<<<<<< HEAD
  	protected $primaryKey = 'id';
=======
	protected $primaryKey = 'id';
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
	protected $fillable = [
		'id_prodi', 'no_ptpp', 'hasil_temuan', 'deskripsi_kondisi', 'akar_masalah', 'kriteria', 'akibat_resiko', 'rencana_perbaikan', 'tanggapan_audit', 'rekomendasi', 'jadwal_perbaikan', 'pj_perbaikan', 'rencana_pencegahan', 'jadwal_pencegahan', 'pj_pencegahan', 'status', 'tanggal_audit'
	];
	public function prodi()
	{
		return $this->belongsTo(Prodi::class, 'id_prodi');
	}
	public function jadwal()
	{
<<<<<<< HEAD
		return $this->belongsTo(Jadwal::class, 'tanggal_audit');
=======
		return $this->belongsTo(Jadwal::class, 'tgl_audit');
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
	}
}
