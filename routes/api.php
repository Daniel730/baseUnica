<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('student', [ApiController::class, 'getAllStudents']);
Route::get('student/{id}', [ApiController::class, 'getStudent']);
Route::post('student', [ApiController::class, 'createStudent']);
Route::put('student/{id}', [ApiController::class, 'updateStudent']);
Route::delete('student/{id}', [ApiController::class, 'deleteStudent']);
