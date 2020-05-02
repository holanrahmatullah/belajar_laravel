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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Holan UAD';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

// mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/{create}', 'MahasiswaController@create');
Route::post('/mahasiswa', 'MahasiswaController@store');

// Students dengan cara manual
//  Route::get('/students', 'StudentsController@index'); // menampilkan data students
//  Route::get('/students/ create', 'StudentsController@create'); // form untuk nambah Data
//  Route::post('/students', 'StudentsController@store'); // menangani insert data ke dalam database
//  Route::get('/students/{student}', 'StudentsController@show');  // untuk menampilkan detail dari students
//  Route::delete('/students/{student}', 'StudentsController@destroy');  // untuk menghapu data
//  Route::get('/students/{student}/edit', 'StudentsController@edit');  // untuk merubah data
//  Route::patch('/students/{student}', 'StudentsController@update');  // untuk menangkap perubahan data

// Students dengan caara magicnya laravel

Route::resource('students','StudentsController');