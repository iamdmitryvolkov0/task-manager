<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/tasks', [TasksController::class, 'showTasks']);
Route::get('/tasks/{id}', [TasksController::class, 'showTask']);
Route::post('/tasks', [TasksController::class, 'storeTask']);
Route::put('/tasks/{id}',[TasksController::class, 'putTaskData']);
Route::patch('/tasks/{id}',[TasksController::class, 'patchTaskData']);
Route::delete('/tasks/{id}', [TasksController::class, 'deleteTask']);
