<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormController_tugas2;
use App\Http\Controllers\FormController_praktik;

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

Route::get('/salam', function () {
    return ('assalamualaikum');
});
//routing.mengarahkan ke view
route::get('/hallo', function() {
    return view ('hallo');
});

route::get('/hallo2', function() {
    return view ('hallo.halloworld');
});
Route::get('/form_praktik', [FormController_praktik::class, 'index']);
Route::post('/hasil_praktik', [FormController_praktik::class, 'hasil']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);

Route::get('/form2', [FormController_tugas2::class, 'index']);
Route::post('/hasil2', [FormController_tugas2::class, 'hasil']);
