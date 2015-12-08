<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('admin', 'HomeController@index');

Route::get('index', 'WelcomeController@index');

Route::get('profil', 'ProfilController@profil');
Route::get('profil/create', ['as'=>'create','uses'=>'ProfilController@create']);
Route::get('komentar', 'ProfilController@komentar');
Route::post('profil', ['as'=>'simpanberita', 'uses'=>'ProfilController@simpan']);
Route::get('profil/{slug}', ['as'=>'tampilprofil', 'uses'=>'ProfilController@tampilprofil']);

Route::get('profil/{slug}/edit', ['as'=>'editartikel', 'uses'=> 'ProfilController@edit']);

Route::patch('profil/{slug}', ['as'=>'updateartikel', 'uses'=> 'ProfilController@update']);

Route::delete('profil/{slug}', ['as'=>'hapusartikel', 'uses'=> 'ProfilController@hapus']);




Route::get('profil/{id}/edit', 'ProfilController@edit');
Route::patch('profil/{id}', 'ProfilController@update');


Route::get('tentang', 'WelcomeController@tentang');

Route::get('upload', 'WelcomeController@upload');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('artikel','DataController@artikel');
Route::get('artikel/{id}','DataController@show');

Route::get('berita','BeritaController@daftarberita');
Route::get('berita/create', 'BeritaController@create');
Route::get('berita/{id}','BeritaController@show');
Route::post('berita', 'BeritaController@store');
Route::get('berita/{id}/edit', 'BeritaController@edit');

Route::patch('berita/{id}', 'BeritaController@update');
