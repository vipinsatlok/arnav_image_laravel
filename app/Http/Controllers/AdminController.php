<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // return admin home page
    public function index(Request $request)
    {
        return view("admin.index");
    }

    public function show_image(Request $request)
    {
        return view("admin.index");
    }

    // return admin images page
    public function images(Request $request)
    {
        $all_image_data =   Image::all();

        dd($all_image_data);
        return view("admin.images");
    }
}
