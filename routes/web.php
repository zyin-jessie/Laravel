<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SummaryController;
use App\Models\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::get('/summary', [SummaryController::class, 'index'])->name('summary');

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'handleRegister'])->name('register.submit');

Route::get('/students/{student}/edit', [SummaryController::class, 'edit'])->name('students.edit');
Route::patch('/students/{student}', [SummaryController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [SummaryController::class, 'destroy'])->name('students.destroy');
