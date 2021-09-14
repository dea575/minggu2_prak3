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


Route::get('/', function () {
    return "Selamat Datang";
});
Route::get('/prodi', function(){
    return "Manajemen Informatika.<br>Teknik Informatika";
});

Route::get('/news/{id}', function ($id){
    return "news".$id;;
});

Route::get('/sarana', function(){
    return "Perkantoran.<br>Laboratorium.<br>Kelas.<br>Lainnya";
});

Route::get('/about', function(){
    return "About us";
});

Route::get('/comment/{id}', function ($id){
    return "nama dan pesan dari".$id;;
});