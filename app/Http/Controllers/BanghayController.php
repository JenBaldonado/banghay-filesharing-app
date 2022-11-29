<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Stroage;
//use Illuminate\View\Middleware\ShareErrorsFromSession;

use App\Models\Banghay;

class BanghayController extends Controller
{
    public function index()
    {
        
        return view('banghay.subjects');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required|max:255',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        $file = $request->file;
        $data = new Banghay();

        if($request->file()){
            $filename = 'banghay' . '_' . $file->getClientOriginalName();
            $request->file->move(public_path('uploads'), $filename);
            $data->file = $filename;
            $data->name = $request->name;
            $data->gradelevel = $request->gradelevel;
            $data->subject = $request->subject;

            $data->save();
            return back()->with('success', 'Success! The file has been uploaded to your chosen grade level page.');
        };
        
    }

    
    public function download($file)
    {

        return response()->download(public_path('uploads/' . $file));
    }

    public function preview($id)
    {
        $data = Banghay::find($id);

        return view('banghay.displaysubjects', compact('data'));
    }


    public function gradeone()
    {
        $datas = Banghay::where('gradelevel', 'Grade 1')->orderBy('created_at', 'DESC')->get();

        return view('banghay.gradeone', compact('datas'));
    }

    public function gradetwo()
    {
        $datas = Banghay::where('gradelevel', 'Grade 2')->orderBy('created_at', 'DESC')->get();
        return view('banghay.gradetwo', compact('datas'));
    }

    public function gradethree()
    {
        $datas = Banghay::where('gradelevel', 'Grade 3')->orderBy('created_at', 'DESC')->get();
        return view('banghay.gradethree', compact('datas'));
    }

    public function gradefour()
    {
        $datas = Banghay::where('gradelevel', 'Grade 4')->orderBy('created_at', 'DESC')->get();
        return view('banghay.gradefour', compact('datas'));
    }

    public function gradefive()
    {
        $datas = Banghay::where('gradelevel', 'Grade 5')->orderBy('created_at', 'DESC')->get();
        return view('banghay.gradefive', compact('datas'));
    }

    public function gradesix()
    {
        $datas = Banghay::where('gradelevel', 'Grade 6')->orderBy('created_at', 'DESC')->get();
        return view('banghay.gradesix', compact('datas'));
    }
}
