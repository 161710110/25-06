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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('jurusan', 'JurusanController');
// Route::resource('kelas', 'KelasController');


Route::get('/register',function(){
	return view('errors.404');
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
	Route::get('/filter/kelas/{id}', 'AbsenController@filter');
	Route::resource('akumulasi','AkumulasiController');
}); 
Route::group(['prefix'=>'user','middleware'=>['auth','role:user']],function(){
Route::resource('rekap','FrontendController');
Route::post('/isirekap' , 'FrontendController@index2')->name('isirekap');
});
Route::post('/laporanabsensi' , 'AkumulasiController@index2');
Route::get('/rincianlowongan/{id}', 'FrontendController@bacalengkap');