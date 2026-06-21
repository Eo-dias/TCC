<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dev;

Route::get('/', function () {
    $devs = Dev::all();
    return view('home', compact('devs'));
});