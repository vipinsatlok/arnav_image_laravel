<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{

    // return home page
    public function index(Request $request)
    {
        return view("guest.index");
    }

    // return about page
    public function about(Request $request)
    {
        return view("guest.about");
    }

    // return contact page
    public function contact(Request $request)
    {
        return view("guest.contact");
    }
}
