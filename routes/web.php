<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentScheduleController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/course', [CourseController::class, 'index']);
Route::get('/program', [ProgramController::class, 'index']);

Route::resource('employee', StudentController::class);

Route::get('/studentschedule', StudentScheduleController::class);


Route::get('/basic', [TestController::class, 'showMessage']);
Route::get('/basic/{name}', [TestController::class, 'showName']);

Route::resource('/products', ProductController::class);
Route::get('/welcome/{name}', WelcomeController::class);