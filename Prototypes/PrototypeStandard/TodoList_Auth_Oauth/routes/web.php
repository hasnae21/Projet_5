<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todolistController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\googleController;


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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [TestController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/', [todolistController::class, 'index']);
Route::post('/store', [todolistController::class, 'store']);
Route::get('/edit/id', [todolistController::class, 'edit']);
Route::put('/update/id', [todolistController::class, 'update']);
Route::delete('/delete/id', [todolistController::class, 'destroy']);
// Route::resource('/', 'todolistController');


Route::get('google-auth', [googleController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/callback', [googleController::class, 'callbackGoogle']);

require __DIR__ . '/auth.php';
