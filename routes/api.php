<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;

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

// Empleados
Route::get('employees/{id_employee?}',[EmployeeController::class,'show']);
Route::post('employee',[EmployeeController::class,'store']);
Route::put('employee/{id_employee?}',[EmployeeController::class,'update']);
Route::delete('employee/{id_employee?}',[EmployeeController::class,'delete']);

// Salarios
Route::get('salaries/{id_salary?}',[SalaryController::class,'show']);
Route::post('salary',[SalaryController::class,'store']);
Route::put('salary/{id_salary?}',[SalaryController::class,'update']);
Route::delete('salary/{id_salary?}',[SalaryController::class,'delete']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
