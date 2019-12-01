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
Route::get('/siswa_qb','Siswacontroller@cara_qb');
Route::get('/awalanA','Siswacontroller@awalanA');
Route::get('/soal2_orm','Siswacontroller@awalanA');
Route::get('/akhiranS','Siswacontroller@akhiranS');
Route::get('/soal4_orm','Siswacontroller@akhiranS');
Route::get('/soal5','Siswacontroller@soal5');
Route::get('/soal5_orm','Siswacontroller@soal5');
Route::get('/soal6','Siswacontroller@soal6');
Route::get('/soal6_orm','Siswacontroller@soal6');
Route::get('/soal7','Siswacontroller@soal7');
Route::get('/soal7_orm','Siswacontroller@soal7');
Route::get('/soal8','Siswacontroller@soal8');
Route::get('/soal8_orm','Siswacontroller@soal8');
Route::get('/soal9','Siswacontroller@soal9');
Route::get('/soal9_orm','Siswacontroller@soal9');
Route::get('/soal10','Siswacontroller@soal10');
Route::get('/soal10_orm','Siswacontroller@soal10');
/////////////////////////////////////////////////////////////
Route::get('/jurusan','JurusanController@index')->name('jurusan');
Route::get('/jurusan/form','JurusanController@form');
Route::post('/jurusan/save','JurusanController@save');

Route::get('/jurusan/formedit/{id}','JurusanController@formedit');
Route::post('/jurusan/update','JurusanController@update');
Route::get('/jurusan/delete/{id}','JurusanController@delete');