<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthControllerStudent;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', function () {
    return view('dashboard');
});
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::get('chooseregistration', [AuthController::class, 'chooseregistration'])->name('chooseregister');
Route::get('/get-majors', [AuthController::class, 'getMajors'])->name('getMajors');
Route::get('/get-typeschools', [AuthController::class, 'getTypeSchools'])->name('getTypeSchools');
Route::get('/get-provinces', [AuthController::class, 'getProvinces'])->name('getProvinces');
Route::get('/get-cities', [AuthController::class, 'getCities'])->name('getCities');
Route::get('/get-subdistricts', [AuthController::class, 'getSubdistricts'])->name('getSubdistricts');
Route::get('/get-schools', [AuthController::class, 'getSchools'])->name('getSchools');
Route::post('post-registrationStudent', [AuthControllerStudent::class, 'postRegistration'])->name('registerStudent.post');
