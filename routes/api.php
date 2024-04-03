<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\LoginController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alunos', [AlunosController::class, 'index']);
Route::post('/alunos', [AlunosController::class, 'store']);
Route::get('/alunos/{id}', [AlunosController::class, 'show']);
Route::put('/alunos/{id}', [AlunosController::class, 'update']);
Route::delete('/alunos/{id}', [AlunosController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/login/{id}', [LoginController::class, 'show']);
Route::put('/login/{id}', [LoginController::class, 'update']);
Route::delete('/login/{id}', [LoginController::class, 'destroy']);




