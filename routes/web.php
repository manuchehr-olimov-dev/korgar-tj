<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index', ["userType" => "worker"]);
});

Route::get('/{userType}', function($userType){
    return view('index', ["userType" => $userType]);
});
