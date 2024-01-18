<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\TemperatureController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ValidasiController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('login', [AuthController::class, 'loginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('calculator', [CalculatorController::class, 'index']);
Route::post('calculate', [CalculatorController::class, 'calculate']);
Route::get('/temperature', [TemperatureController::class, 'index']);
Route::post('/temperature', [TemperatureController::class, 'calculate']);

Route::get('/',[MahasiswaController::class,'index'])->name('pages.index')->middleware('auth');
Route::post('/hitung',[MahasiswaController::class,'hitung'])->name('pages.hitung');

Route::get('/hapus-session', [MahasiswaController::class,'hapusSession']);

Route::get('/input',[ValidasiController::class, 'input']);
Route::post('/proses',[ValidasiController::class, 'proses']);

Route::resource('/companies',CompanyController::class);
Route::resource('/grades',GradeController::class);

Route::get('/guru',[GuruController::class,'index'])->name('guru.index');
Route::get('/guru/cari',[GuruController::class,'cari']);


Route::delete('/guru/{guru}', [GuruController::class,'destroy'])->name('guru.destroy');
Route::get('/guru/create',[GuruController::class,'create'])->name('guru.create');
Route::post('/guru',[GuruController::class,'store'])->name('guru.store');
Route::get('/guru/{guru}/edit',[GuruController::class,'edit'])->name('guru.edit');
Route::put('/guru/{guru}',[GuruController::class,'update'])->name('guru.update');
Route::get('/guru/{guru}',[GuruController::class,'show'])->name('guru.show');
Route::get('/gurutrash',[GuruController::class,'trash']);
Route::get('/gurutrash/{id}',[GuruController::class,'restore'])->name('guru.trash');


// Route::resource('/guru',GuruController::class);



