<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComplaintController;

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
Route::get('/charts', function () {
    return view('charts');
});
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/resolved', function () {
    return view('resolved');
});
Route::get('/inprogress', function () {
    return view('inprogress');
});
Route::get('/pending', function () {
    return view('pending');
});
Route::get('/report', function () {
    return view('report');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('complaints', ComplaintController::class);
Route::resource('users', UserController::class);


