<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $totaldoctors=Doctor::count();
        $totalpatients=Patient::count();
        return view('dashboard',compact('totaldoctors','totalpatients'));
    }
}
