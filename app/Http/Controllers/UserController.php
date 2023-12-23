<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // return profile page
    public function profile(Request $request)
    {
        return view("user.profile");
    }
}
