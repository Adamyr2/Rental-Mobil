<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/landing-page', [LandingPageController::class, 'index']);
Route::get('/booking/create', [LandingPageController::class, 'create']);
Route::post('/booking/store', [LandingPageController::class, 'store']);
Route::get('/show/{$id}', [LandingPageController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::prefix('dashboard')
        ->name('admin.')
        ->group(function () {
            Route::get('/', [DashboardController::class, 'index']);
            //buat route product
            Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
            Route::get('/produk/create', [ProdukController::class, 'create']);
            Route::post('/produk/store', [ProdukController::class, 'store']);
            Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
            Route::post('/produk/update', [ProdukController::class, 'update']);
            Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
        });
});
