<?php

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
Route::get('/', function () {
    return view('projects');
});

// Tasks page
Route::get('project/tasks', function () {
    return view('tasks');
});

// Create new Project Page
Route::get('create-project', function () {
    return view('create-project');
});