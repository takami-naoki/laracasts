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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::resource('projects', \App\Http\Controllers\ProjectsController::class);

    Route::post('/projects/{project}/tasks', [\App\Http\Controllers\ProjectTasksController::class, 'store'])->name('tasks.store');
    Route::patch('/projects/{project}/tasks/{task}', [\App\Http\Controllers\ProjectTasksController::class, 'update']);

    Route::post('/projects/{project}/invitations', [\App\Http\Controllers\ProjectInvitationsController::class, 'store']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
