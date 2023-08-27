<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function Index()
    {
        return view("employer");
    }

    public function SignUp()
    {
        return view('employer.sign-up');
    }

    public function SignIn()
    {
        return view('employer.sign-in');
    }
}
