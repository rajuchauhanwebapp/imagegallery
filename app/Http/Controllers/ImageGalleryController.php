<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageGallery;

class ImageGalleryController extends Controller
{
    public function index()
    {
        $images = ImageGallery::all();
        return view('welcome', ['images'=>$images]);
    }

    public function store_image(Request $request)
    {
        if ($request->hasFile('photo')) 
        {
            $file_path = $request->file('photo')->store('gallery_images', 'public');
            # OR
            // $new_image_name = time().'.'.$request->photo->extension();
            // $request->move(public_path('gallery_images'), $new_image_name);
            // $new_image_name = 'gallery_images/'.$new_image_name;

            $image_gallery = new ImageGallery();
            $image_gallery->photo =$file_path;
            $image_gallery->save();
        }
        return redirect(route('home'));
    }
}
