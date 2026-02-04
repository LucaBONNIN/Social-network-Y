<?php

//use Illuminate\Support\Facades\Route;
//
//Route::get('/', function () {
//    return view('home');
//});

use App\Http\Controllers\ChirpController;

Route::get('/', [ChirpController::class, 'index']);
