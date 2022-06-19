<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPageController;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/t', function () {
//     return view('pages.index');
// });
Route::get('/test',[PagesController::class,"index"])->name("/test");
Route::get('/admin',[PagesController::class,"dashboard"])->name('admin.dashboard');
Route::get('/admin/main',[MainPageController::class,"index"])->name('admin.main');
Route::put('/admin/main',[MainPageController::class,"update"])->name('admin.main.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
