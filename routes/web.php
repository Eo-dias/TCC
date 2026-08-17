<?php

use Illuminate\Support\Facades\Route;
use App\Models\Dev;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    $devs = App\Models\Dev::all();
    $configs = App\Models\Configuracao::all()->keyBy('chave');
    return view('home', compact('devs', 'configs'));
});

Route::get('/contato', function () {
    return view('contact');
})->name('contact.form');

Route::post('/contato', [ContactController::class, 'store'])
    ->name('contact.send');
