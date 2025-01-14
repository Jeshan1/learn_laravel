<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckAgeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'user'], function(){
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::get('register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('register', [UserController::class, 'register']);

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);

Route::post('logout', [UserController::class, 'logout'])->name('logout');




Route::middleware(['auth'])->group(function(){
    Route::get('/form', [CheckAgeController::class, 'index'])->name('ageform');
    Route::post('/check-age', [CheckAgeController::class, 'check'])->name('checkage');
    Route::get('/vote', function (){
        return view('vote');
    })->middleware('ensure')->name('vote');
});

Route::resource('blogs', BlogController::class);

