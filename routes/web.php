<?php

use App\Http\Controllers\AuthController;
use Faker\Guesser\Name;
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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//login / Register

Route::redirect('/' , 'loginPage');
Route::get('loginPage', [AuthController::class , 'loginPage'])->name('auth#loginPage');
Route::get('registerPage', [AuthController::class , 'registerPage'])->name('auth#registerPage');