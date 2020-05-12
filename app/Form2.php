<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
	protected $table = 'table_form2';
	protected $primaryKey = 'id_form2';
	protected $fillable = [
		'id_prodi', 'elemen', 'sub_elemen', 'nama_dokumen', 'keterangan'
	];

	public function prodi()
	{
<<<<<<< HEAD
		return $this->belongsTo(Prodi::class, 'id_prodi');
=======
		return $this->belongsTo(Prodi::class);
>>>>>>> 05e7864c6482a010bdac9efc2435ca179a17e911
	}
}
