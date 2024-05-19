<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   function register(Request $req){

    $user = new User;

    $user->Pnumber= $req->input('dnumber');
    $user->pwd= Hash::make($req->input('dpassword'));
    $user->save();



    return $user;
   }
}
