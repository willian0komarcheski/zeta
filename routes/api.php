<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorretorController;

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
Route::patch('/corretores/put/{id}', [CorretorController::class, 'update']);
Route::get('/corretores/view/{id}', [CorretorController::class , 'show']);
Route::delete('/corretores/delete/{id}', [CorretorController::class, 'destroy']);
Route::post('/corretores/post', [CorretorController::class, 'store']);
Route::get('/corretores/get', [CorretorController::class, 'index']);