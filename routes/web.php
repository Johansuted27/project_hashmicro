<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputUserController;


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

Route::get('/test', function () {
    dd(bcrypt('admin123'));
});




Route::get('/input_user', [InputUserController::class, 'index'])->name('index.form');
Route::get('/process_form', [InputUserController::class, 'process'])->name('form.input.user');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
