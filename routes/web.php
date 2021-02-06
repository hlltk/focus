<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();


Route::put('/edit', [App\Http\Controllers\EditTableController::class, 'store'])->name('edit-Table');


Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/table', [App\Http\Controllers\EditTableController::class, 'index'])->name('editTable');
    Route::post('/add-table', [App\Http\Controllers\EditTableController::class, 'store'])->name('add-table');
    Route::get('/alarm', [App\Http\Controllers\AlarmController::class, 'index'])->name('alarm');
    Route::get('/note', [App\Http\Controllers\NoteController::class, 'index'])->name('note');

    Route::get('/edit-table', 'App\Http\Controllers\ProductController@create')->name('edit.table');
});
