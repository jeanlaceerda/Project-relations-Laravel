<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Incluir um novo usuário
Route::Post('/users', [UserController::class, 'createUser']);
Route::get('/users', [UserController::class, 'index']);

//Buscar um usuário pelo ID
Route::get('/users/{id}', [UserController::class, 'findOne']);

//Incluir um novo endereço
Route::Post('/addresses', [AddressController::class, 'createAddress']);
Route::get('/addresses', [AddressController::class, 'index']);

// buscar por um endereço pelo ID
Route::get('/addresses/{id}', [AddressController::class, 'findOne']);
