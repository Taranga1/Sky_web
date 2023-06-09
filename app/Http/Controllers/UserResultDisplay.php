<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result ;
class UserResultDisplay extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search != "") {
            //where 
            $result = Result::where('symbolnumber','LIKE',"%$search%")->get();
        }else{
            $result = Result::all();
        }
        
        return view('userresult.page',compact('result','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
