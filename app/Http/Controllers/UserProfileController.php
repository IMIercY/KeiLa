<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    //
    public function index()
    {
        if(Auth::guard()->check())
        {
            $user = Auth::user();
            return view('profile')->with('user',$user);
        }
        return redirect()->route('login');
    }
}
