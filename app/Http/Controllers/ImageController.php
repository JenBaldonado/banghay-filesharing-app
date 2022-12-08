<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function index()
    {
        $datas = Image::all();

        return view('banghay.subjects',compact('datas'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        $file = $request->file;
        $datas = new Image();

        $filename = 'banghay' . '_' . $file->getClientOriginalName();

        $request->file->move(public_path('/uploads'), $filename);
        $datas->file = $filename;

        $datas->save();
        return back()->with('success', 'Success!');
       
        
    }


    public function welcome()
    {
        $datas = Image::all();

        return view('welcome', compact('datas'));
    }

    public function show()
    {

        $datas = Image::all();

        return view('banghay.displaysubjects', compact('datas'));
    }

}