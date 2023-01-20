<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HegaldiakController;

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
    return redirect('/hegaldiak');
});

Route::get('/hegaldiak', HegaldiakController::class . '@index')->name('hegaldiak');

Route::get('/hegaldiak/{id}', [HegaldiakController::class , 'aldatuhegaldia'])->name('hegaldia-aldatu');

Route::patch('/hegaldiak/{id}', [HegaldiakController::class , 'aldatuhegaldiadb'])->name('hegaldia-aldatu-db');
