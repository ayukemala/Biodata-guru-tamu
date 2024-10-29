<?php

use App\Http\Controllers\RuteController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Ini adalah rute tanpa MVC
Route::get('/rutebaru',function ()
{
    return '<h1 style="color:pink;">Ini adalah rute baru tanpa MVC</h1>';
});


// Ini adalah rute dengan view
Route::get('/ruteview', function () {
    return view('ruteview');
});

// Ini Adalah Rute Dengan View,& Controller
Route::get('/rutecontroller',[RuteController::class, 'menampilkanData']);

// Ini Adalah Rute Dengan View,Controller & Model
Route::get('/rutemodel',[RuteController::class, 'menampilkanDataModel']);

// Tugas
Route::get('/rutebiodata',[BiodataController::class, 'menampilkanbiodata']);
