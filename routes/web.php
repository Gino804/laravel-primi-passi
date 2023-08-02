<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/greggio', function () {
    $data = [
        'name' => 'Ezio',
        'surname' => 'Greggio',
        'age' => 69
    ];
    return view('people.greggio', $data);
});

Route::get('/iacchetti', function () {
    $data = [
        'name' => 'Enzo',
        'surname' => 'Iacchetti',
        'age' => 70
    ];
    return view('people.iacchetti', $data);
});

Route::get('/scotti', function () {
    $data = [
        'name' => 'Gerry',
        'surname' => 'Scotti',
        'age' => 66
    ];
    return view('people.scotti', $data);
});
