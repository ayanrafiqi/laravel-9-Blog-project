<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller  
{
    Function userHandler(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->passowrd);
        $user->username = $req->username;
        $user->save();
        return redirect('/');
    }
}
