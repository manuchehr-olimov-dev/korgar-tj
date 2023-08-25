<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Index($userType = "")
    {
        return view('index',  [
            "userType" => $userType
        ]);
    }
    
}
