<?php

use App\Http\Controllers\FormatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeanController;
use App\Http\Controllers\UserController;
use App\Models\Language;
use Illuminate\Support\Facades\Route;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/panel_admin', function () {
    $language = Language::all();
    return view('panel_admin', compact('language'));})->middleware(['auth','admin'])->name('admin');

Route::get('/lenguaje_view', function () {
    return view('lenguaje_view');
});
Route::get('/info', [UserController::class, 'show'] , function () {
    $language = Language::all();
    return view('info')->name('info');
})->middleware(['auth']);
Route::get('/add_resource', function () {
    return view('add_resource');
});
Route::get('/format_view', [FormatController::class, 'index'] , function () {
    return view('format_view');})->name('format_view');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', [HomeController::class, 'show'])->name('home');

require __DIR__.'/auth.php';

Route::name('means')->middleware(['auth'])->group(function(){

    Route::get('/means', [MeanController::class, 'index'])->name('.index');
    Route::get('/means/language/{id}', [MeanController::class, 'language'])->name('.language');
    Route::get('/means/create/{id}', [MeanController::class,'create'])->name('.create');
    Route::post('/means/create/{id}', [MeanController::class, 'store'])->name('.store');
    Route::get('/detail/{id}', [MeanController::class, 'view'])->name('.view');
    Route::delete('/means{id}', [MeanController::class, 'destroy'])->name('.destroy');
    Route::get('/means{id}/edit', [MeanController::class,'edit'])->name('.edit');
    Route::put('/means{id}', [MeanController::class, 'update'])->name('.update');
});

Route::name('users')->middleware(['auth','admin'])->group(function(){

    Route::get('/users', [UserController::class, 'index'])->name('.users');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('.destroy');
    Route::get('/users/{id}/edit', [UserController::class,'edit'])->name('.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('.update');
   
});

Route::get('/foro', function () {
    return view('foro');
});


