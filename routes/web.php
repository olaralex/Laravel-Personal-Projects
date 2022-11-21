<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;

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

//Home Page

Route::get('/', function () {

    $var = [
        'copywrite' => '©'
    ];

    $title_page = [
        'title' => 'Home Page'
    ];

    return view('welcome', $var, $title_page);
});

//Services Page

Route::get('/services', [ServiceController::class, 'service']);

// Web Design Page

Route::get('/services/web design', [ServiceController::class, 'design']);

// Web Development Page

Route::get('/services/web development', [ServiceController::class, 'dev']);

// Consulting Page

Route::get('/services/consulting', [ServiceController::class, 'cons']);
