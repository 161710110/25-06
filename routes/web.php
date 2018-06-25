<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('jurusan', 'JurusanController');
// Route::resource('kelas', 'KelasController');


Route::get('/cek',function(){
	return view('layouts.light');
});
Route::get('/side',function(){
	return view('partials.sidebar');
});
Route::get('/lightside',function(){
	return view('partials.lightsidebar');
});

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
	Route::resource('jurusan','JurusanController');
	Route::resource('kelas','KelasController');
	Route::resource('siswa','SiswaController');
	Route::resource('absen','AbsenController');
	Route::resource('akumulasi','AkumulasiController');
}); 
Route::post('/laporanabsensi' , 'AkumulasiController@index2');