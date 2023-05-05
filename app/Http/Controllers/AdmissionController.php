<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function admission(){
        return view('admission.create');
    }

    

    function store(Request $req)
    {
        $admission = new Admission;
        $admission->id=$req->id;
        $admission->fullname=$req->fullname;
        $admission->fathername=$req->fathername;
        $admission->mothername=$req->mothername;
        $admission->address1=$req->address1;
        $admission->nextclass=$req->nextclass;
        $admission->gmail=$req->gmail;
        $admission->phone1=$req->phone1;
        $admission->phone2=$req->phone2;
        $admission->gpa=$req->gpa;
        $admission->dob=$req->dob;
        $admission->description=$req->description;
        if($req->hasfile('image')){
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/useradmissionimage', $filename);
            $admission->image = $filename;
        }
        $admission->save();
        return redirect()->back();
    }

    

    function show(){
        return Admission::all();
        
    }

    public function destroy(string $id)
    {
        $admission = Admission::find($id);
        $admission->delete();
        return redirect('admission')->with('status','Admission Deleted Successfully');
    }
}
