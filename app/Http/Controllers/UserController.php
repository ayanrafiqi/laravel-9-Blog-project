<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use session;

class UserController extends Controller
{
    function createUser(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email |unique:users',
            'password' =>  'min:8|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword' => 'min:8|max:15',
        ]);

        $user = new User;
        $user->name = $req->name;
        $user->email = strtolower($req->email);
        $user->password = Hash::make($req->password);
        $req->session()->put('loginId', $user->userId);
        $user->save();
        return redirect('/login');
    }

    function loginUser(Request $req)
    {

        $email = strtolower($req->email);
        $password = $req->password;

        $req->validate([
            'email' => 'required|email',
            'password' => 'required |min:8|max:15',
        ]);


        $user = User::where('email', '=', $email)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                $req->session()->put('loginId', $user->userId);
                return redirect("/compose");
            } else {
                return back()->withErrors('password is not correct');
            }
        } else {
            return back()->withErrors('Email is not registered');
        }
    }
}
