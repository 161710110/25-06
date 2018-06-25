<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = ['nis','nama','jenis_kelamin','kelas_id'];
    public $timestamps = true;

    public function Kelas(){
    	return $this->belongsTo('App\Kelas','kelas_id');
    }

    public function Absen(){
    	return $this->hasOne('App\absen','siswa_id');
    }
}
