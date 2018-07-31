<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['nama','jurusan_id','wali_kelas'];
    public $timestamps = true;

    public function Jurusan(){
    	return $this->belongsTo('App\Jurusan','jurusan_id');
    }

    public function Siswa(){
    	return $this->hasMany('App\Siswa','kelas_id');
    }

    public function Absen(){
        return $this->hasMany('App\absen','kelas_id');
    }
}
