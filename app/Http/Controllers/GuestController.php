<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index(Request $request)
    {
        return view("guest.index");
    }

    public function about(Request $request)
    {
        return view("guest.about");
    }

    public function contact(Request $request)
    {
        return view("guest.contact");
    }

    public function termOfUse(Request $request)
    {
        return view("guest.term-of-use");
    }


    public function privacyPolicy(Request $request)
    {
        return view("guest.privacy-policy");
    }

    
}
