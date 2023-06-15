<?php

use App\Models\pesanan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FormController_tugas2;
use App\Http\Controllers\FormController_praktik;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\KategoriProdukController;


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
route::get('/hallo', function () {
    return view('hallo');
});

route::get('/hallo2', function () {
    return view('hallo.halloworld');
});
Route::get('/form_praktik', [FormController_praktik::class, 'index']);
Route::post('/hasil_praktik', [FormController_praktik::class, 'hasil']);

Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'hasil']);

Route::get('/form2', [FormController_tugas2::class, 'index']);
Route::post('/hasil2', [FormController_tugas2::class, 'hasil']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/produk',[ProdukController::class, 'index']);
route::get('/produk/create',[ProdukController::class, 'create']);
route::post('/produk/store',[ProdukController::class, 'store']);

route::get('/pesanan',[PesananController::class, 'index'])-> name('pesanan');
route::get('/kategori',[KategoriProdukController::class, 'index'])-> name('kategoriproduk');

Route::prefix('frontend')->group(function () {
    Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend');

});