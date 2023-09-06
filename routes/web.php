<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::redirect('/', 'loginPage');
Route::get('loginPage', [AuthController::class, 'loginPage'])->name('auth#loginPage');
Route::get('registerPage', [AuthController::class, 'registerPage'])->name('auth#registerPage');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    //deshboard

    Route::get('deshboard', [AuthController::class, 'deshboard']);


    //Admin 

    Route::group(['prefix' => 'category' , 'middleware' =>'admin_middleware'], function () {
        Route::get('list', [CategoryController::class, 'list'])->name('category#list');
        Route::get('create/page' , [CategoryController::class, 'createPage'])->name('category#create');
        Route::post('create', [CategoryController::class , 'store' ])->name('category#store');
        Route::get('edit/{id}' ,[ CategoryController::class , 'edit'])->name('category#edit');
        Route::post('update/{id}' , [CategoryController::class , 'update'])->name('category#update');
        Route::get('delete/{id}',[CategoryController::class , 'delete'])->name('category#delete');
    });


    //User

    Route::group(['prefix' => 'user' , 'middleware' => 'user_middleware'], function () {
        Route::get('list', function () {
            return view('user.list');
        })->name('user#list');
    });
});
