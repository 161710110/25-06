<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    protected $fillable = ['tanggal','siswa_id','kelas','keterangan'];
    public $timestamps = true;

    public function Siswa(){
    	return $this->belongsTo('App\Siswa','siswa_id');
    }
}
