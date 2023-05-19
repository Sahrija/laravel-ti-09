<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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
Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);
