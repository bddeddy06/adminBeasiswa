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
	return view('main');
});

Route::get('/gagaldaftar', function () {
	return view('gagaldaftar');
});
Auth::routes();

Route::resource('/kirimemail','BeasiswaController');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/dt_ppa','DataTrainPPAController');
Route::resource('/jurusan','JurusanController');
Route::resource('/beranda','BerandaController');
Route::resource('/info-beasiswa','InfoBeasiswaController');
Route::resource('/dt_class','dt_classController');
Route::resource('/rules','rulesController');
Route::resource('/daftarppa','DaftarPPAController');
Route::resource('/mainpage','MainController');
Route::resource('/pengumuman','PengumumanController');
Route::resource('/pendaftar','DetailController');
Route::resource('/laporan','LaporanController');
Route::resource('/admin','adminController');
Route::resource('/meansubs','meansubsController');

