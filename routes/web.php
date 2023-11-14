<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageGalleryController;

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


Route::get('/', [ImageGalleryController::class, 'index'])->name('home');
Route::post('store-image/', [ImageGalleryController::class, 'store_image'])->name('store_image');

