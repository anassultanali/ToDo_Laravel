<?php

use App\Http\Controllers\ToDoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [ToDoController::class , 'index']);
Route::post('/' ,[ToDoController::class , 'store'] );
Route::patch('/{task}' , [ToDoController::class , 'update']);
Route::delete('/{task} ' , [ToDoController::class , 'destroy']);