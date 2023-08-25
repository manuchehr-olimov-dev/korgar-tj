<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, "Index"]);

Route::get('/{userType}',[MainController::class, "Index"]);
