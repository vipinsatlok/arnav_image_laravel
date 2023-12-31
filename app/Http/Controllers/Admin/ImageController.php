<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Image::paginate(10);
        return view("admin.image.image", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.image.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $request->validate([
            'file' => 'required|mimes:png|max:3060',
            'tags' => 'required|string',
            'title' => 'required|string'
        ]);

        $file = $request->file('file');
        $compress_percent = 10;
        $width = getimagesize($file->path())[0] / $compress_percent;
        $height = getimagesize($file->path())[1] / $compress_percent;
        $file_size = round($file->getSize() / 1024);
        $file_name  = uniqid() . ".png";
        $file_dimention = getimagesize($file->path())[0] . ', ' . getimagesize($file->path())[1]; // width, height
        $file->move(public_path('uploads'), $file_name);

        $ImageData = [
            'title' => $request->input('title'),
            'tags' => $request->input('tags'),
            'file_size' => $file_size,
            'file_dimention' => $file_dimention,
            'file_name' => $file_name,
        ];

        Image::create($ImageData);

        return redirect()->route("admin.image")->with('success', 'File uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::destroy($id);
        return redirect()->back()->with('success', 'File deleted successfully');
    }
}
