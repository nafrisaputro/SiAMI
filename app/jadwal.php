<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'table_jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['lokasi', 'tahap_audit', 'ruang_lingkup', 'auditi', 'wakil_auditi', 'auditor_ketua', 'auditor_anggota', 'lead_auditor', 'tgl_audit'];

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'lokasi');
    }
    public function ptpp()
    {
        return $this->hasMany(Ptpp::class);
    }
}
