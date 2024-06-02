<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexbudget', function () {
    return view('indexbudget');
});

Route::get('/createbudget', function () {
    return view('createbudget');
});

Route::get('/editbudget', function () {
    return view('editbudget');
});

Route::get('/indextransaksi', function () {
    return view('indextransaksi');
});

Route::get('/createtransaksi', function () {
    return view('createtransaksi');
});

Route::get('/edittransaksi', function () {
    return view('edittransaksi');
});