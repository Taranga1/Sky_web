<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result ;
class ResultController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Result::all();
        return view('admin.results.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.results.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = new Result() ;
        $result->id=$request->id ;
        $result->term=$request->term ;
        $result->symbolnumber=$request->symbolnumber ;
        $result->gpa=$request->gpa ;
        $result->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $result = Result::find($id);
        return view("admin.results.edit",compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $result = Result::find($id);
        $result->symbolnumber = $request->symbolnumber;
        $result->gpa =  $request->gpa;
        $result->term = $request->term;
        $result->update();
        return redirect('result')->with('status','Result Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = Result::find($id);
        $result->delete();
        return redirect('result')->with('status','Result Deleted Successfully');
    }

}