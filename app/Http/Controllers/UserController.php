<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
       return view('dashboard.users.index');
   }
    public function profile(){
        return view('dashboard.users.profile');
    }
    public function settings(){
        return view('dashboard.users.settings');
    }
}
