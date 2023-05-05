<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

use function GuzzleHttp\Promise\all;

class UserNoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $notice = Notice::paginate(5);
    //     return view('usernotice.page',compact('notice'));
    // }

    public function index(Request $request){
        $search = $request['search'] ?? "";
        if($search != "") {
            //where 
            $notice = Notice::where('title','LIKE',"%$search%")->get();
        }else{
            $notice = Notice::all();
        }
        return view('usernotice.page',compact('notice','search'));
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
