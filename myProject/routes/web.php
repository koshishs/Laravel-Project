<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CdController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
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

Route::get('/',function(){
    return view('welcome');
})->name('welcome');


Route::get('/book', [BookController::class, 'index'])->middleware('can:isuser')->name('book');
Route::post('/book/create', [BookController::class, 'store'])->middleware('can:isadmin')->name('storebook');
Route::get('/book/create', [BookController::class, 'create'])->middleware('can:isuser')->name('addbook');
Route::get('/book/{book}', [BookController::class, 'edit'])->middleware('can:iseditor')->name('editbook');
Route::put('/book/{book}', [BookController::class, 'update'])->middleware('can:iseditor')->name('updatebook');
Route::delete('/book/{book}', [BookController::class, 'destroy'])->middleware('can:isadmin')->name('deletebook');

Route::get('/cd', [CdController::class, 'index'])->middleware('can:isuser')->name('cd');
Route::post('/cd/create', [CdController::class, 'store'])->middleware('can:isadmin')->name('storecd');
Route::get('/cd/create', [CdController::class, 'create'])->middleware('can:isadmin')->name('addcd');
Route::get('/cd/{cd}', [CdController::class, 'edit'])->middleware('can:iseditor')->name('editcd');
Route::put('/cd/{cd}', [CdController::class, 'update'])->middleware('can:iseditor')->name('updatecd');
Route::delete('/cd/{cd}', [CdController::class, 'destroy'])->middleware('can:isadmin')->name('deletecd');

Route::get('/game', [GameController::class, 'index'])->middleware('can:isuser')->name('game');
Route::post('/game/create', [GameController::class, 'store'])->middleware('can:isadmin')->name('storegame');
Route::get('/game/create', [GameController::class, 'create'])->middleware('can:isadmin')->name('addgame');
Route::get('/game/{game}', [GameController::class, 'edit'])->middleware('can:iseditor')->name('editgame');
Route::put('/game/{game}', [GameController::class, 'update'])->middleware('can:iseditor')->name('updategame');
Route::delete('/game/{game}', [GameController::class, 'destroy'])->middleware('can:isadmin')->name('deletegame');


Route::post('/feedback/create', [FeedbackController::class, 'store'])->name('feedback');

Route::resource('/users', UserController::class)->middleware(['auth', 'can:isadmin']);



