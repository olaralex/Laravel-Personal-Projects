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

// Web Design Page

Route::get('/services/web design', function () {

    $var = [
        'copywrite' => '©'
    ];

    $title_page = [
        'title' => 'Web Design'
    ];

    $services = [
        ['type' => 'web design', 'price' => '150$'],
        ['type' => 'web development', 'price' => '300$'],
        ['type' => 'consulting', 'price' => '50$/hour']
    ];

    $name = request('name');

    return view('web-design',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
});

// Web Development Page

Route::get('/services/web development', function () {

    $var = [
        'copywrite' => '©'
    ];

    $title_page = [
        'title' => 'Web Development'
    ];

    $services = [
        ['type' => 'web design', 'price' => '150$'],
        ['type' => 'web development', 'price' => '300$'],
        ['type' => 'consulting', 'price' => '50$/hour']
    ];

    $name = request('name');

    return view('web-development',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
});

// Consulting Page

Route::get('/services/consulting', function () {

    $var = [
        'copywrite' => '©'
    ];

    $title_page = [
        'title' => 'Consulting'
    ];

    $services = [
        ['type' => 'web design', 'price' => '150$'],
        ['type' => 'web development', 'price' => '300$'],
        ['type' => 'consulting', 'price' => '50$/hour']
    ];

    $name = request('name');

    return view('consulting',$var ,$title_page)->with(['services' => $services] ,['name' => $name]);
});
