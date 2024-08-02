<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors=Doctor::all();
        return view('doctors.index',compact('doctors'));
    }
    public function create()
    {
        return view('doctors.create');

    }
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required|String',
            'speciality'=>'required',
            'arrival_time'=>'required',
            'photopath'=>'required|image',
        ]);
        $photoname=time().'.'.$request->photopath->extension();
        $request->photopath->move(public_path('images'),$photoname);
        $data['photopath']=$photoname;

        Doctor::create($data);
       return redirect()->route('doctors.index')->with('success','Doctor Created Sucessfully');

    }
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request,$id)
    {
        $data=$request->validate([
            'name'=>'required|String',
            'speciality'=>'required',
            'arrival_time'=>'required',
            'photopath'=>'required|image',
        ]);
        $doctor= Doctor::find($id);
        if($request->hasFile('photopath'))
        {
            $photoname=time().'.'.$request->photopath->extension();
            $request->photopath->move(public_path('images'),$photoname);
            $data['photopath']=$photoname;
            //delete old photo
            $oldphoto=public_path('images').'/'.$doctor->photopath;
        if(file_exists($oldphoto))
        {
            unlink($oldphoto);
        }
     }
        Doctor::find($id)->update($data);
        return redirect()->route('doctors.index');

    }
    public function destroy($id)
    {
        $doctor=Doctor::find($id);
        $photo=public_path('images').'/'.$doctor->photopath;
        if(file_exists($photo))
        {
            unlink($photo);
        }
        $doctor->delete();
        return redirect()->route('doctors.index');
    }
    
}
