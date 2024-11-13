<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get("register",[EmployeeController::class,'openRegister']);

Route::post("store",[EmployeeController::class,'store']);

Route::get("display",[EmployeeController::class,"display"]);

Route::get("delete/{id}",[EmployeeController::class,'delete']);