<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Trophy\TrophyController;
use App\Http\Controllers\Advice\AdviceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthControllerStudent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GPTController;
Route::post('/student/set-dream', [GPTController::class, 'setDream'])->name('student.setDream');
Route::post('/answer-dream/store', [GPTController::class, 'storeAnswerDream'])->name('answer-dream.store');
Route::post('/gpt/save-answer', [GPTController::class, 'saveAnswer'])->name('gpt.saveAnswer');
Route::post('/advice/store', [GPTController::class, 'store'])->name('advice.store');
Route::post('/gpt/generate3', [GPTController::class, 'generate3'])->name('gpt.generate3');
Route::get('/tes-ai', [GPTController::class, 'chat']);
Route::get('/', [GPTController::class, 'index']);
Route::post('/gpt', [GPTController::class, 'generate'])->name('gpt.generate');
Route::post('/gpt2', [GPTController::class, 'generate2'])->name('gpt.generate2');
Route::post('/gpt3', [GPTController::class, 'generate3'])->name('gpt.generate3');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', function () {
    return view('dashboard');
});
// web.php
Route::post('/trophies/{type}/{id}/pin', [TrophyController::class, 'pin'])->name('trophy.pin');
Route::delete('/trophies/{type}/{id}/unpin', [TrophyController::class, 'unpin'])->name('trophy.unpin');
Route::post('/trophy/register/{type}/{id}', [TrophyController::class, 'register'])->name('trophy.register');
Route::get('/search-trophies', [TrophyController::class, 'search']);
Route::get('/search-trophies2', [TrophyController::class, 'search2']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('advice', [AdviceController::class, 'index'])->name('advice');
Route::get('consultation', [GPTController::class, 'index'])->name('consultation');
Route::get('dream', [GPTController::class, 'dream'])->name('dream');
Route::get('motivation', [GPTController::class, 'motivation'])->name('motivation');
Route::get('trophy', [TrophyController::class, 'index'])->name('trophy');
Route::get('competition', [TrophyController::class, 'competition'])->name('competition');
Route::get('forum', [TrophyController::class, 'forum'])->name('forum');
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
