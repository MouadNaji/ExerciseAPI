<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercisesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('exercises', [ExercisesController::class, 'exercises']);
Route::get('selected', [ExercisesController::class, 'selected']);

Route::post('deselect', [ExercisesController::class, 'deselect']);
Route::post('select', [ExercisesController::class, 'select']);