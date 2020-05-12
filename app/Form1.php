<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    protected $table = 'table_form1';
    protected $primaryKey = 'id_form1';
    protected $fillable = [
        'no', 'ruang_lingkup', 'sub_ruang_lingkup', 'pertanyaan'
    ];
}
