<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ptpp extends Model
{
	protected $table = 'table_ptpp';
	protected $fillable = [
		'id_prodi', 'no_ptpp', 'hasil_temuan', 'deskripsi_kondisi', 'akar_masalah', 'kriteria', 'akibat_resiko', 'rencana_perbaikan', 'tanggapan_audit', 'rekomendasi', 'jadwal_perbaikan', 'pj_perbaikan', 'rencana_pencegahan', 'jadwal_pencegahan', 'pj_pencegahan', 'status', 'tgl_audit'
	];
	public function prodi()
	{
		return $this->belongsTo(Prodi::class);
	}
}
