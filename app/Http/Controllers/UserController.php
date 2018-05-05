<?php

namespace App\Http\Controllers;
use App\UserRole;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    ////////////////Login/////////////////////////////////
    public function getLoginForm()
    {
        if(!Auth::check())
        {
            return view('login');
        }
        else
        {
            $user = Auth::user();
            Auth::login($user,true);
            return redirect()->home();
        }
    }
    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request['txt_email'],'password'=>$request['txt_password']],true))
        {
            $user = new User();
            if(Auth::check())
            {
                $user = Auth::user();
                Auth::login($user,true);
            }
            return redirect()->home();
        }
        return redirect()->back()->withInput()->with('error_msg',"Email Or Password Incorrect!");
    }
    //////////////////Registration/////////////////////////
    public function getRegistrationForm()
    {
        return view('registration');
    }
    public function registration(Request $request)
    {
        $user = new User();
        $user->email = $request['txt_email'];
        $user->password = bcrypt($request['txt_password']);
        $user->full_name = $request['txt_fullname'];
        $user->phone = $request['txt_phone'];
        if(isset($user->email,$user->password,$user->full_name,$user->phone))
        {
            $user->save();
			$role = new UserRole();
			$role->user_id = $user->id;
			$role->player = true;
			$role->save();
            Auth::login($user,true);
            return redirect()->home();
        }
        return redirect()->back()->withInput()->with('error_msg',"Unable To Create Account,Please Try Again!");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->home();
    }
}
