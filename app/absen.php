<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    protected $fillable = ['tanggal','siswa_id','kelas_id','keterangan'];
    public $timestamps = true;

    public function Siswa(){
    	return $this->belongsTo('App\Siswa','siswa_id');
    }

    public function Kelas(){
    	return $this->belongsTo('App\Kelas','kelas_id');
    }
}
