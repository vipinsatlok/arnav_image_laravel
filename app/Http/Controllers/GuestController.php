<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            $image = Image::where('title', 'like', '%' . $query . '%')
                ->orWhere('tags', 'like', '%' . $query . '%')
                ->paginate(4);
        } else {
            $image = Image::paginate(8);
        }

        return view("guest.index", compact('image'));
    }

    public function getImageData()
    {

        $image = Image::paginate(8);
        $html = view("include.homeImages", compact('image'))->render();

        return response()->json([
            'status' => true,
            'html' => $html
        ]);
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
        $image = Image::where('file_name', $imageId . '.png')->first();
        $tags = $image->tags;

        $imageData = Image::where(function ($query) use ($tags) {
            foreach (explode(',', $tags) as $tag) {
                $query->orWhere('tags', 'like', '%' . trim($tag) . '%');
            }
        })
            ->where('id', '!=', $image->id) // Exclude the original image
            ->paginate(50);


        return view("guest.downlaodImage", ["image" => $image, "imageData" => $imageData]);
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:png|max:5120',
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
