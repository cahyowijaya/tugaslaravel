<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){

        return view('register');
    }

    public function welcome(request $request){  
        
        // dd($request->all());
        $fsname = $request['firstname'];
        $lsname = $request['lastname'];
        return view('welcome',['fsname' => $fsname, 'lsname' => $lsname]);
    }
}
