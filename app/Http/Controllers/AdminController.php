<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $kaf = DB::table('kafedras')->count();
        $fans = DB::table('fans')->count();
        $guruhs = DB::table('guruhs')->count();
        $teachers = DB::table('v_teachers')->count();
        $students = DB::table('v_students')->count();
        $joriynazorat = DB::table('v_joriynazorat')->count();
        $oraliqnazorat = DB::table('v_oraliqnazorat')->count();

        //dd($students);
        return view('dashboard.admins.index',compact('kaf','fans','guruhs','teachers','students','joriynazorat','oraliqnazorat'));
    }
    public function profile(){
        return view('dashboard.admins.profile');
    }
    public function settings(){
        return view('dashboard.admins.settings');
    }
}
