<?php

use App\Http\Controllers\LearningController;
use Illuminate\Support\Facades\Route;

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

Route::get('/learnings', [LearningController::class, 'index']);

Route::post('/learnings', [LearningController::class, 'store'])->name('learnings-store');