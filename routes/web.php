<?php

use App\Http\Controllers\HomeController;
use App\Models\Thought;
use Illuminate\Support\Facades\Artisan;
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
    $thoughts = Thought::all()->random(1);
    foreach ($thoughts as $key => $value) {
        $thoughts = $value->thought;
    }
    return view('welcome',compact('thoughts'));
});

Route::get('privacy-policy', function () {
    return view('privacy');
});


require __DIR__.'/auth.php';
require __DIR__.'/backend.php';

