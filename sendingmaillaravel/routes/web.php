<?php

use Illuminate\Support\Facades\Route;
use App\Mail\PostMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailController;


// Route::get('/', function () {
//     Mail::to('henny.alfianti@gmail.com')
//         ->send(new PostMail('Mengirim Email Menggunakan SMTP Laravel 8', 'Henny Alfianti'));
//     return 'Terkirim';
// });


Route::get('/send-email', [EmailController::class, 'showForm'])->name('send.email.form');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');

