<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    function login(Request $req)
    {
        $user =  User::where(['email'=>$req->email,'role_as'=>$req->role_as == 1])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password not match";
        }
        else
        {
            $req->session()->put('user',$user);

            return redirect('/');
        }
    }

    function register(Request $req)
    {
        // return $req->input();
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
    // public function redirectTo()
    // {
    //     if(Auth::user()->role_as == '1') //1 = Admin Login
    //     {
    //         return 'dashboard';
    //     }
    //     elseif(Auth::user()->role_as == '0') // Normal or Default User Login
    //     {
    //         return '/';
    //     }
    // }
}
