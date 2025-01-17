<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\EmployeeController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::get('/divisions', [DivisionController::class, 'index'])->middleware('auth:sanctum');
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth:sanctum');
Route::post('/employees', [EmployeeController::class, 'store'])->middleware('auth:sanctum');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->middleware('auth:sanctum');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
