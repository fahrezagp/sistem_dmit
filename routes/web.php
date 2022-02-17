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
    return view('home');
});

Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']],function()
{
    Route::get('/admin/{id}/gantipassword','App\Http\Controllers\UserController@gantipassword')->name('passadmin');
    Route::patch('/admin/{id}/simpanpassword','App\Http\Controllers\UserController@simpanpassword')->name('simpanpass');

    Route::get('/user','App\Http\Controllers\UserController@index');
    Route::post('/user/tambah','App\Http\Controllers\UserController@tambah');
    Route::get('/user/{id}/edit','App\Http\Controllers\UserController@edit');  
    Route::post('/user/{id}/update','App\Http\Controllers\UserController@update');  
    Route::get('/user/{id}/hapus','App\Http\Controllers\UserController@hapus');
    

    Route::get('/mitra','App\Http\Controllers\MitraController@index');
    Route::post('/mitra/tambah','App\Http\Controllers\MitraController@tambah');
    Route::get('/mitra/{id}/edit','App\Http\Controllers\MitraController@edit');  
    Route::post('/mitra/{id}/update','App\Http\Controllers\MitraController@update');  
    Route::get('/mitra/{id}/hapus','App\Http\Controllers\MitraController@hapus');

    Route::get('/mitra/tampilkelurahan/{id}','App\Http\Controllers\MitraController@tampilkelurahan');
    Route::get('/mitra/{id}/edit/mitra/tampilkelurahan/{idd}','App\Http\Controllers\MitraController@tampilkelurahan');
    
    Route::get('/supervisor','App\Http\Controllers\SupervisorController@index');
    
    Route::post('/supervisor/tambah','App\Http\Controllers\SupervisorController@tambah');
    Route::get('/supervisor/{id}/edit','App\Http\Controllers\SupervisorController@edit');
    Route::post('/supervisor/{id}/update','App\Http\Controllers\SupervisorController@update');
    Route::get('/supervisor/{id}/hapus','App\Http\Controllers\SupervisorController@hapus');
    

    Route::get('/kegiatan','App\Http\Controllers\KegiatanController@index');
    Route::post('/kegiatan/tambah','App\Http\Controllers\KegiatanController@tambah');
    Route::get('/kegiatan/{id}/edit','App\Http\Controllers\KegiatanController@edit');
    Route::post('/kegiatan/{id}/update','App\Http\Controllers\KegiatanController@update');
    Route::get('/kegiatan/{id}/hapus','App\Http\Controllers\KegiatanController@hapus');
});

Route::group(['middleware' => ['auth','checkRole:admin,supervisor']],function()
{
    Route::get('/prof_mitra/{id}','App\Http\Controllers\MitraController@profmit');

    Route::get('/kegiatanaktif','App\Http\Controllers\KegiatanController@kegiatanaktif')->name('kegiatanaktif');
    Route::get('kegiatanaktif/{id}/detailkegiatan','App\Http\Controllers\KegiatanController@detailkegiatan')->name('dkegiatan');
    Route::get('detailkegiatan/{id}/tambahmitra','App\Http\Controllers\KegiatanController@tambahmitra');

    Route::get('/arsipkegiatan','App\Http\Controllers\KegiatanController@arsipkegiatan')->name('arsipkegiatan');
    Route::get('detailarsip/{id}','App\Http\Controllers\KegiatanController@detailarsip')->name('detailarsip');

    Route::get('/tambahmitra','App\Http\Controllers\SupervisorController@indextambahmitra');
    Route::get('/supervisor/tampilkelurahan/{id}','App\Http\Controllers\SupervisorController@tampilkelurahan');

    Route::get('/supervisor/{id}/profile','App\Http\Controllers\SupervisorController@profile');
    Route::get('/profile','App\Http\Controllers\SupervisorController@profile');
    Route::get('/supervisor/{id}/ubah','App\Http\Controllers\SupervisorController@ubahprofile');
    Route::post('/supervisor/{id}/simpanprofile','App\Http\Controllers\SupervisorController@simpanprofile');
    Route::post('/supervisor/tambahmitra','App\Http\Controllers\SupervisorController@tambahmitra');
    Route::get('/supervisor/{id}/gantipassword','App\Http\Controllers\SupervisorController@gantipassword');
    Route::patch('/supervisor/{id}/simpanpassword','App\Http\Controllers\SupervisorController@simpanpassword');

});

Route::group(['middleware' => ['auth','checkRole:admin,mitra,supervisor']],function()
{
    Route::get('/dashboard','App\Http\Controllers\DashboardController@index');
    Route::get('/dashboard','App\Http\Controllers\DashboardController@mitrakegiatan');

    Route::get('/profilemitra','App\Http\Controllers\MitraController@profilemitra');
    Route::get('/profilemitra/{id}/ubah','App\Http\Controllers\MitraController@ubahprofile');
    Route::post('/profilemitra/{id}/simpanprofile','App\Http\Controllers\MitraController@simpanprofile');
    Route::get('/jobdesk','App\Http\Controllers\MitraController@jobdesk');
    Route::get('/about', 'App\Http\Controllers\AboutController@index');

    
});

Route::group(['middleware' => ['auth','checkRole:admin,mitra,supervisor']],function(){

    Route::get('/mitra/{id}/gantipassword','App\Http\Controllers\MitraController@gantipassword')->name('mitra.gantipassword');
    Route::patch('/mitra/{id}/simpanpassword','App\Http\Controllers\MitraController@simpanpassword');

});
