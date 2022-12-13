<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ViewController;
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

Route::get('/', [ViewController::class,'home'])->name('home');

Route::get('/home', [ViewController::class,'home'])->name('home');

Route::get('/project', [ViewController::class,'project'])->name('project');

Route::get('/add-data', [ViewController::class,'add_data'])->name('add-data');

Route::get('/extra', [ViewController::class,'extra'])->name('extra');

Route::post('/data/store', [DataController::class, 'store'])->name('data.store');

Route::get('/show-data', [DataController::class,'show'])->name('show-data');

Route::get('delete/{id}', [DataController::class,'delete']);



