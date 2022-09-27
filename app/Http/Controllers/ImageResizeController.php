<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageResizeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function resize_image(Request $request)
    {
        $img=$request->file('image');
        $image_name = time(). '.'.$img->getClientOriginalExtension();
        $destinatiobPath = public_path('thumbnail\\');

        $risize_image = Image::make($img->getRealPath());
        $risize_image->resize(150,150,function ($constraint){
            $constraint->aspectRatio();
        });

        $risize_image->save($destinatiobPath.$image_name);

        $destinatiobPath = public_path('/images');
        $img->move($destinatiobPath,$image_name);

        return back()->with('success','Image Upload successful')
            ->with('imageName',$image_name);
    }
}
