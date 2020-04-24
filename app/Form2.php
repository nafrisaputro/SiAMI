<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
	protected $table = 'table_form2';
	protected $primaryKey = 'id_form2';
	protected $fillable = [
		'no', 'elemen', 'sub_elemen', 'nama_dokumen', 'keterangan'
	];

	public function prodi()
	{
		return $this->belongsTo(Prodi::class);
	}
}
