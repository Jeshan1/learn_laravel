<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckAgeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNumeric;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {  
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/parameter/{num}', function($num) {
    if (is_numeric($num) && $num < 10) {
        return implode(",", range(1,$num));
    } else {
        return "please provide a number less than 10";
    }
    
});


Route::group(['prefix'=>'user'], function(){
    Route::get('/about', function () {
        return view('about');
    })->name('about');
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

