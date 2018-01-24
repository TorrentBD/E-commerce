<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function index(Request $request){
    	 $user=$request->all();

    	 User::create($user);

        return "Welcome";
    }
}
