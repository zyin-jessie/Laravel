<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\QuerybuilderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'handleRegister'])->name('register.submit');

Route::get('/querybuilder', [QuerybuilderController::class, 'index']);

Route::get('/employee', [EmployeesController::class, 'index']);
