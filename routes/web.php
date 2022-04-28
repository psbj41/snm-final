<?php

use App\Http\Controllers\HomeController;
use App\Models\Thought;
use Illuminate\Support\Facades\Log;
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
    return view('backend.pages.index');
});

Route::get('/register-form', [HomeController::class,'register'])->name('register.index');
Route::post('/register-form', [HomeController::class,'registerStore'])->name('register.store');

Route::get('/home', function () {
    
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';

