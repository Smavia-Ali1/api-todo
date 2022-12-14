<?php

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
Route::post('/create/task', [App\Http\Controllers\Api\TaskController::class, 'createTask']);
Route::any('/delete/task/{id}', [App\Http\Controllers\Api\TaskController::class, 'delete'])->name('delete');
Route::any('/show/task/{id}', [App\Http\Controllers\Api\TaskController::class, 'show'])->name('show');
Route::put('/update/task/{id}', [App\Http\Controllers\Api\TaskController::class, 'update'])->name('update');
Route::get('/task/status', [App\Http\Controllers\Api\TaskController::class, 'addStatus']);
Route::post('/update/order', [App\Http\Controllers\Api\TaskController::class, 'updateOrder']);
