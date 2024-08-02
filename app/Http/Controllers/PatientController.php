<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        
        $data=$request->validate([
            'doctor_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'problem'=>'required',
        ]);
        Patient::create($data);
        return redirect('/')->with('success','Appointment has been registered sucessfully');
    }
    public function index()
    {
        $patients=Patient::all();
        return view('patients.index',compact('patients'));

    }
    // public function status($id,$status)
    // {
    //     $patient=Patient::find($id);
    //     $patient->status=$status;
    //     $patient->save();
    //     return back()->with('success', 'Appointment is now '.$status);
    // }
}
