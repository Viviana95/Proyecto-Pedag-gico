<?php

use App\Http\Controllers\CreateMeanController;
use App\Http\Controllers\EditMeanController;
use App\Http\Controllers\MeanController;
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

Route::get('/home_admin', function () {
    return view('home_admin');
});

Route::get('/panel_admin', function () {
    return view('panel_admin');
});

Route::get('/lenguaje_view', function () {
    return view('lenguaje_view');
});
Route::get('/info_admin', function () {
    return view('info_admin');
});
Route::get('/add_resource', function () {
    return view('add_resource');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::name('means')->group(function(){

    Route::get('/means', [MeanController::class, 'index'])->name('.index');
    Route::get('/means/create', [CreateMeanController::class, 'create'])->name('.create');
    Route::post('/means', [CreateMeanController::class, 'store'])->name('.store');
    Route::delete('/means{id}', [MeanController::class, 'destroy'])->name('.destroy');
    Route::get('/means{id}/edit', [EditMeanController::class,'edit'])->name('.edit');
    Route::put('/means{id}', [EditMeanController::class, 'update'])->name('.update');
        
    
    });
