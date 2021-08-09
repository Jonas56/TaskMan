<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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

// Projects page
Route::get('/', [ProjectController::class, 'index']);

// Project Tasks page
Route::get('projects/{slug}', [ProjectController::class, 'show']);
Route::put('projects/{slug}', [ProjectController::class, 'markAsCompleted']);
Route::post('projects/{slug}', [TaskController::class, 'create']);
Route::put('tasks/{slug}', [TaskController::class, 'delete']);

// Create new Project Page
Route::get('create-project', function () {
    return view('create-project');
});