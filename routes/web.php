<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoneyController;


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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


Route::get('/', [HoneyController::class, 'trangchu'])->name('posts.home');
Route::get('/san-pham/{slug}', [HoneyController::class, 'sanpham'])->name('posts.sanpham');
Route::get('/gioi-thieu', [HoneyController::class, 'gioithieu'])->name('posts.gioithieu');
Route::get('/lien-he', [HoneyController::class, 'lienhe'])->name('posts.lienhe');
Route::get('/tai-khoan', [HoneyController::class, 'taikhoan'])->name('posts.taikhoan');
Route::get('/chi-tiet-san-pham/{slug}', [HoneyController::class, 'chitietsanpham'])->name('posts.chitietsanpham');
Route::get('/video', [HoneyController::class, 'video'])->name('posts.video');



