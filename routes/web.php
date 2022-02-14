<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::view('home', 'home')->middleware('verified');

Route::get('/forms/{form}', [FormController::class, 'show'])->name('forms.show')->middleware('auth');
Route::post('/forms/{form}', [FormController::class, 'store'])->name('forms.store')->middleware('auth');