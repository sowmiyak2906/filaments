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

use App\Http\Controllers\FormController;
use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('contact');
});

Route::get('/contact', [FormController::class, 'contact'])->name('contact');

Route::post('/submit-contact', [FormController::class, 'submitContact'])->name('submit-contact');
Route::post('/submit-enquiry', [FormController::class, 'submitEnquiry'])->name('submit-enquiry');

route::get('/home',[TemplateController::class,'index']);