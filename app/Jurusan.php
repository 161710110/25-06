<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['nama'];
    public $timestamps = true;

    public function Kelas(){
    	return $this->hasMany('App\Kelas','jurusan_id');
    }
}
