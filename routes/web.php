<?php

use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AskController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AskController::class, 'index']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


Route::get('/login', [SessionController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionController::class, 'store'])->middleware('guest');
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::post('/question', [QuestionController::class, 'store']);
Route::post('/answer', [AnswerController::class, 'store']);
Route::post('{user:username}/questions/{id}/like', [LikeController::class, 'like'])->middleware('auth');


Route::get('{user:username}', [ProfileController::class, 'show']);
Route::get('{user:username}/questions', [ProfileController::class, 'questions']);
Route::get('{user:username}/received', [ProfileController::class, 'received'])->middleware('auth');
Route::get('{user:username}/edit', [ProfileController::class, 'edit'])->middleware('auth');
Route::patch('{user:username}/edit', [ProfileController::class, 'update'])->middleware('auth');
