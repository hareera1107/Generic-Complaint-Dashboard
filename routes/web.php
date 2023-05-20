<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\ComplaintStatusController;

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
// Route::get('/charts', function () {
//     return view('charts');
// });
Route::get('/reports', function () {
    return view('reports');
});
Route::get('/report', function () {
    return view('report');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', UserController::class);
    Route::resource('complaints', ComplaintController::class);
    Route::get('inProgress', [ComplaintController::class, 'inProgress'])->name('complaints.inProgress');
    Route::get('pending', [ComplaintController::class, 'pending'])->name('complaints.pending');
    Route::get('resolved', [ComplaintController::class, 'resolved'])->name('complaints.resolved');
    Route::get('charts', [ComplaintController::class, 'charts'])->name('complaints.charts');
    Route::get('reports', [ComplaintController::class, 'reports'])->name('complaints.reports');
    Route::get('/complaints/{id}/mark-in-progress', [ComplaintController::class, 'markInProgress'])->name('complaints.markInProgress');
    Route::get('/complaints/{id}/mark-resolved', [ComplaintController::class, 'markResolved'])->name('complaints.markResolved');
    Route::resource('categories', CategoryController::class);

});

