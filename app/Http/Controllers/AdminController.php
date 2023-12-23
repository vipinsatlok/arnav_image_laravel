<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    // return admin home page
    public function index(Request $request)
    {
        return view("admin.index");
    }

    // return admin images page
    public function images(Request $request)
    {
        return view("admin.images");
    }
}
