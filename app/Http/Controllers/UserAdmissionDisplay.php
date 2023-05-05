<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class UserAdmissionDisplay extends Controller
{
    public function DisplayAdmission(){
        $admissions = Admission::all();
        return view('admission.display',compact('admissions'));
    }

    function getData(){
        return Admission::all();
    }
}
