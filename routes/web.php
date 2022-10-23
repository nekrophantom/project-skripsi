<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['authcheck'])->group(function() {
	Route::get('/login', 'LoginController@index');
	Route::post('/login/dologin', 'LoginController@doLogin');

	Route::get('/register', 'LoginController@register');
	Route::post('/login/doregister', 'LoginController@doRegister');
});
Route::get('logout', 'LoginController@logout');
Route::middleware(['authlogedin'])->group(function(){
	Route::get('/', 'HomeController@index');

	// USER
	Route::get('/user', 'UserController@index');
	Route::get('/tambah-user', 'UserController@create');
	Route::post('/do-add-user', 'UserController@store');
	Route::get('/edit-user/{id}', 'UserController@show');
	Route::post('/do-update-user/{id}', 'UserController@update');
	Route::get('/delete-user/{id}', 'UserController@destroy');

	// PENYAKIT
	Route::get('/penyakit', 'PenyakitController@index');
	Route::get('/penyakit-divisi', 'PenyakitController@jabatan');
	Route::get('/tambah-penyakit', 'PenyakitController@create');
	Route::post('/do-add-penyakit', 'PenyakitController@store');
	Route::get('/edit-penyakit/{id}', 'PenyakitController@show');
	Route::post('/do-update-penyakit/{id}', 'PenyakitController@update');
	Route::get('/delete-penyakit/{id}', 'PenyakitController@destroy');

	// GEJALA
	Route::get('/gejala', 'GejalaController@index');
	Route::get('/tambah-gejala', 'GejalaController@create');
	Route::post('/do-add-gejala', 'GejalaController@store');
	Route::get('/edit-gejala/{id}', 'GejalaController@show');
	Route::post('/do-update-gejala/{id}', 'GejalaController@update');
	Route::get('/delete-gejala/{id}', 'GejalaController@destroy');

	// RULES
	Route::get('/rules', 'RulesController@index');
	Route::get('/tambah-rules', 'RulesController@create');
	Route::post('/do-add-rules', 'RulesController@store');
	Route::get('/edit-rules/{id}', 'RulesController@show');
	Route::post('/do-update-rules/{id}', 'RulesController@update');
	Route::get('/delete-rules/{id}', 'RulesController@destroy');


	// ANALISA
	Route::get('/analisa', 'AnalisaController@index');
	Route::post('/do-add-analisa', 'AnalisaController@store');
	Route::get('/hasil-analisa/{id}', 'AnalisaController@hasil_analisa');


});

