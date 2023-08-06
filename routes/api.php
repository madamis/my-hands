<?php

use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\v1\CategoryController as ApiCategoryController;
use Illuminate\Http\Request;
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
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:sanctum')->group(function(){
    Route::prefix('v1')->group(function(){
        Route::resource('projects', 'App\Http\Controllers\api\v1\ProjectsController');

        Route::resource('categories', 'App\Http\Controllers\api\v1\CategoryController');

        Route::resource('events', 'App\Http\Controllers\api\v1\EventController');
    });
});
