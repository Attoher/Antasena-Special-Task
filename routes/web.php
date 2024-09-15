<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});
Route::get('/team', function () {
    return view('team',['title' => 'Team']);
});
Route::get('/cars', function () {
    return view('cars',['title' => 'Cars']);
});
Route::get('/activities', function () {
    return view('activities',['title' => 'Activities']);
});
Route::get('/partners', function () {
    return view('partners',['title' => 'Partners']);
});
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact']);
});
Route::get('/news', function () {
    return view('news',['title' => 'News']);
});

use App\Http\Controllers\Controller;

Route::get('/timeline', [Controller::class, 'yourMethod']);