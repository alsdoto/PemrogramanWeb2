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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::resource('karyawan', App\Http\Controllers\KaryawanController::class);
    Route::post('karyawan/delete', 'App\Http\Controllers\KaryawanController@delete')->name('karyawan.delete');
    Route::get('karyawansendemail/{id}','App\Http\Controllers\KaryawanController@sendemail')->name('karyawan.sendemail');

    Route::resource('projek', App\Http\Controllers\ProjekController::class);
    Route::post('projek/delete', 'App\Http\Controllers\ProjekController@delete')->name('projek.delete');

    Route::resource('assignprojek', App\Http\Controllers\AssignProjekController::class);
    Route::post('assignprojek/delete', 'App\Http\Controllers\AssignProjekController@delete')->name('assignprojek.delete');
});