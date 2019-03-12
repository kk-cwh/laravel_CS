<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
}
