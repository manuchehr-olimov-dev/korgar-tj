<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, "Index"]);

Route::prefix("worker")->group(function(){

    Route::get("/", [WorkerController::class, "Index"]);

});

Route::prefix("employer")->group(function(){

    Route::get("/",         [EmployerController::class, "Index"]);
    Route::get("/sign-in",  [EmployerController::class, "SignIn"]);
    Route::get("/sign-up",  [EmployerController::class, "SignUp"]);
    Route::get("/admin",    [EmployerController::class, "AdminPanel"])->middleware('admin');

});

