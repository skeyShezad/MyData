<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
      $User = user::where(['email'=>$req->email])->first();
      if(!$User || !Hash::check($req->password, $User->password)){

        return "Username and password is not correct";
      }
      else{
        session()->put('user', $User);
        return redirect('/');
      }
    }
}

