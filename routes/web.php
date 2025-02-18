<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\FuelController;
use App\Http\Controllers\BodyController;

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


//Route::resource('makers', MakerController::class);
Route::resource('makers', MakerController::class);
Route::get('makers', [MakerController::class, 'index'])->name('makers.index');
Route::get('/makers/{body}', [MakerController::class, 'show'])->name('makers.show');
Route::get('/makers/{body}/edit', [MakerController::class, 'edit'])->name('makers.edit');
Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::patch('/makers/{body}', [MakerController::class, 'update'])->name('makers.update');
Route::delete('/makers/{body}', [MakerController::class, 'destroy'])->name('makers.destroy');

Route::get('models', [ModelController::class, 'index'])->name('models.index');

Route::resource('fuels', FuelController::class);
Route::get('fuels', [FuelController::class, 'index'])->name('fuels.index');
Route::get('/fuels/{body}', [FuelController::class, 'show'])->name('fuels.show');
Route::get('/fuels/{body}/edit', [FuelController::class, 'edit'])->name('fuels.edit');
Route::get('/fuels/create', [FuelController::class, 'create'])->name('fuels.create');
Route::patch('/fuels/{body}', [FuelController::class, 'update'])->name('fuels.update');
Route::delete('/fuels/{body}', [FuelController::class, 'destroy'])->name('fuels.destroy');

Route::resource('bodies', BodyController::class);
Route::get('bodies', [BodyController::class, 'index'])->name('bodies.index');
Route::get('/bodies/{body}', [BodyController::class, 'show'])->name('bodies.show');
Route::get('/bodies/{body}/edit', [BodyController::class, 'edit'])->name('bodies.edit');
Route::get('/bodies/create', [BodyController::class, 'create'])->name('bodies.create');
Route::patch('/bodies/{body}', [BodyController::class, 'update'])->name('bodies.update');
Route::delete('/bodies/{body}', [BodyController::class, 'destroy'])->name('bodies.destroy');
