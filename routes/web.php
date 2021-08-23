<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Crm\Homes\HomeController;
use App\Http\Controllers\Crm\References\BrandController;
use App\Http\Controllers\Crm\References\GenderController;
use App\Http\Controllers\Crm\References\SeasonController;
use App\Http\Controllers\Crm\References\SizeController;

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

Route::get('/catalog', function () {
    return view('site.catalogs.index');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/brands', BrandController::class);
    Route::resource('/genders', GenderController::class);
    Route::resource('/sizes', SizeController::class);
    Route::resource('/seasons', SeasonController::class);
    
});
