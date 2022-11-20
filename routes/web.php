<?php

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

    $var = [
        'copywrite' => '©'
    ];

    $title_page = [
        'title' => 'Home Page'
    ];

    return view('welcome', $var, $title_page);
});

Route::get('/services', function () {

    $var = [
        'copywrite' => '©'
    ];

    $title_page = [
        'title' => 'Services'
    ];

    $services = [
        ['type' => 'web design', 'price' => '150$'],
        ['type' => 'web development', 'price' => '300$'],
        ['type' => 'consulting', 'price' => '50$/hour']
    ];

    $name = request('name');

    return view('services',$var ,$title_page)->with(['services' => $services], ['name' => $name]);
});
