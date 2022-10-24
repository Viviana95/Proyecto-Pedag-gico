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
    return view('panel_admin');})->middleware(['auth','admin'])->name('admin');


Route::get('/info', [UserController::class, 'show'] , function () {
    return view('info');
})->middleware(['auth']);

Route::get('/foro', function () {
    return view('foro');
})->middleware(['auth'])->name('foro');



require __DIR__.'/auth.php';

Route::name('means')->middleware(['auth'])->group(function(){
    
    Route::get('/means', [MeanController::class, 'index'])->name('.index');
    Route::get('/means/create/{id}', [MeanController::class,'create'])->name('.create');
    Route::post('/means/create/{id}', [MeanController::class, 'store'])->name('.store');
    Route::delete('/means{id}', [MeanController::class, 'destroy'])->name('.destroy');
    Route::get('/means{id}/edit', [MeanController::class,'edit'])->name('.edit');
    Route::put('/means{id}', [MeanController::class, 'update'])->name('.update');
});

Route::middleware(['auth'])->group(function(){

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/language/{id}', [HomeController::class, 'filterByLanguage'])->name('language');
Route::get('/detail/{id}', [HomeController::class, 'meanDetail'])->name('detail');
Route::get('/home', [HomeController::class, 'searchMeanByTitle'])->name('home');
Route::get('/info{id}/edit', [UserController::class,'edit'])->name('.edit');
Route::get('/format_view', [FormatController::class, 'index'])->name('format_view');
});

Route::name('users')->middleware(['auth','admin'])->group(function(){

    Route::get('/users', [UserController::class, 'index'])->name('.users');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('.destroy');
    Route::get('/users/{id}/edit', [UserController::class,'edit'])->name('.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('.update');
   
});


