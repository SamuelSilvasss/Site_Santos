<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
})->name('principal');

Route::get('/quemsomos', function () {
    return view('quemsomos');
})->name('quemsomos');

Route::get('/contato', function () {
    return view('contato');
})->name('contato');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::post('/contato', [ContatoController::class, 'enviarContato'])->name('contato.enviar');

require __DIR__.'/auth.php';
