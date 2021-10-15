<?php

use App\Http\Controllers\CalculatorOldController;
use App\Http\Controllers\HomePostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Livewire\Calculator\MenuMonsters;
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

Route::get('', function () {
    return redirect('home');
});

Route::resources([
    'home' => HomePostController::class,
]);
// Route::resource('home', HomePostController::class)->middleware('can:isAdmin')->except('index', 'show');

Route::get('/calculator', [PagesController::class, 'calculator'])->name('calculator');
// Route::get('/calculator/monster/{$id}', [MenuMonsters::class]);
Route::get('/forum', [PagesController::class, 'forum'])->name('forum');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/profile', [PagesController::class, 'profile'])->middleware('auth')->name('profile');
