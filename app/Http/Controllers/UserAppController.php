<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAppController extends Controller
{
    public function index()
    {
        $users = User::count();
        return view('layouts.user_app',compact('users'));
    }
}