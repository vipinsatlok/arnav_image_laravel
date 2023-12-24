<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{

    public function index(Request $request)
    {
        $page = (int)$request->query('page', 1);
        $query = $request->search;
        $perPage = 5;
        $images = Image::orderBy('created_at', 'desc')->paginate($perPage, ['*'], 'page', $page);
        $totalPages = (int)ceil($images->total() / $perPage);

        if ($query) {
            $images = Image::where('title', 'like', "%$query%")->get();
        }

        return view("guest.index", compact('images', 'page', 'perPage', 'totalPages'));
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

    public function downlaod(Request $request, $imageId)
    {
        return view("guest.downlaodImage", ["imageId" => $imageId]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png,jpg|max:5120',
            'tags' => 'required|string|max:50',
            'title' => 'required|string'
        ]);

        $file = $request->file('file');
        $fileSize = $file->getSize();
        $tags = $request->tags;
        $title = $request->title;
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/'), $fileName);

        Image::create([
            'fileName' => $fileName,
            'fileSize' => $fileSize,
            'title' => $title,
            'tags' => $tags
        ]);

        return redirect()->back()->with('success', 'File uploaded successfully');
    }

    public function delete(Request $request, $password, $imageId)
    {

        if ($password !== "mynameisarnav") {
            return redirect("/");
        }

        $image = Image::where('fileName', $imageId . ".png")->first();
        Storage::delete('uploads/' . $image->fileName);
        $image->delete();

        return "Deleted successfully this image from database";
    }
}
