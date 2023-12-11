<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\ProfileController;
/*SANDY*/
use App\Http\Controllers\CommandeController;
/*fin Sandy*/
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.log');
Route::get('/register',[FormulaireController::class,'index'])->name('register');
Route::post('/register', [FormulaireController::class, 'store'])->name('register.store');


/* SANDY */
Route::get('/carte', [CommandeController::class, 'show'])->name('carte');
Route::post('/selection', [CommandeController::class, 'selected']);
/*fin Sandy*/

Route::get('/profile', [ProfileController::class,'profile'])->name('profile');
Route::post('/profile', [ProfileController::class,'update'])->name('update');
Route::post('/profile/history', [ProfileController::class,'showHistory'])->name('history');