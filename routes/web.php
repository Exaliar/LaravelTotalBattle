<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/home', [PagesController::class, 'index'])->name('home');
Route::get('/calculator/old', [PagesController::class, 'calculator_old'])->name('calculator.old');
Route::get('/calculator/new', [PagesController::class, 'calculator_new'])->name('calculator.new');
Route::get('/forum', [PagesController::class, 'forum'])->name('forum');
Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/profile', [PagesController::class, 'profile'])->middleware('auth')->name('profile');
