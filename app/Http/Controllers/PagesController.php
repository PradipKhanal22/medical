<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      
        $doctors=Doctor::latest()->get();
        return view("welcome",compact('doctors'));
    }
    public function appointment()
    {
        return view('appointment');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function viewdetails($id)
    {
        $doctor = Doctor::find($id);
        return view('viewdetails',compact('doctor'));
    }
    public function showregister()
    {
        return view('showregister');
    }
}
