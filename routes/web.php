<?php

use App\Http\Controllers\WallpaperController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [WallpaperController::class, 'getViewWallpaper'])->name('dashboard');
Route::get('/download/{image}', [WallpaperController::class, 'downloadWallpaper'])->name('download');
Route::post('/api', [WallpaperController::class, 'getSpecificWallpaper'])->name('fetchwallpaper');