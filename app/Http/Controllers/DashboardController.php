<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $users = User::count();
        $admission = Admission::count();
        $result = Result::count();
        return view('admin.dashboard',compact('users','admission','result'));
    }
}
