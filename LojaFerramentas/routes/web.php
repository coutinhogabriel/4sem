<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { //fuction sempre que vai retornar uma view
    return view('home');
});

// só para mostrar o formulário
Route::get('/registro',[UserController::class, 'showRegistroForm'])-> name('usuarios.registro'); 

// só para processar o formulário
Route::post('/registro',[UserController::class, 'registro'])-> name('usuarios.registro');

// só para mostrar o login
Route::get('/login',[UserController::class, 'showLoginForm'])-> name('usuarios.login'); 

// só para processar o login
Route::post('/login',[UserController::class, 'login'])-> name('usuarios.login');

// rota para página interna
Route::get('/dashboard', function(){
    return view('usuarios.dashboard');
})->middleware('auth')->name('usuarios.dashboard'); //validação para que apenas usuarios tenham acesso 

//rota do logout
Route::post('/logout', [UserController::class, 'logout']);