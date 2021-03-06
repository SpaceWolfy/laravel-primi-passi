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
    $data = [
        'firstName' => 'Boolean',
        'surname' => 'Student'
    ];

    return view('home', $data);
})->name('home');

Route::get('/header', function () {
    $url = route('home');
    return view('header', compact('url'));
});
