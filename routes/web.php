<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputUserController;
use App\Http\Controllers\UserController;


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






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function() {
    Route::get('/input_user', [InputUserController::class, 'index'])->name('index.form');
    Route::get('/process_form', [InputUserController::class, 'process'])->name('form.input.user');

    Route::resource('user', UserController::class);

});
