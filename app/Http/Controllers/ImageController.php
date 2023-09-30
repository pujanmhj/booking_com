<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    public function imageUpload(Request $request): RedirectResponse
    {
        $request->validate([
            'image.*' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:5120',
        ]);
 
        foreach ($request->image as $value) {
            $imageName = time().'_'.$value->getClientOriginalName();
            $value->move(public_path('images'),$imageName);
 
            $imageNams[] = $imageName;
        }
 
        return redirect()->back()->withSuccess('You have successfully upload image.')->with('image',$imageNams);
    }
}
