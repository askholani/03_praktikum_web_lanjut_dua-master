<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/Home', function () {
//     return view('index');
// });

Route::get('/home', [HomeController::class,'indextest']);

Route::get('/Dashboard', function () {
    return view('dashboard');
});

Route::prefix('List')->group(function () {
    Route::get('/Profile', [DashboardController::class, 'profile']);
    // http://127.0.0.1:8000/List/Profile
    // Route::get('/Profile-Andika', [DashboardController::class, 'profile2']);
    // // http://127.0.0.1:8000/List/Profile-Andika
    // Route::get('/Profile-Alif', [DashboardController::class, 'profile3']);
    // // http://127.0.0.1:8000/List/Profile-Alif
});

// Auth::routes();

Route::get('/Profile/{id}' ,[DashboardController::class, 'profile2']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
