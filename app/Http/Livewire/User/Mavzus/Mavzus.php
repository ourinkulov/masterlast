<?php

namespace App\Http\Livewire\User\Mavzus;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Mavzus extends Component
{
    public $kurs,$guruh,$userID,$fan='';
    public function render()
    {
        $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();
        $comples= DB::table('v_comples')
                     ->where('uid','=',$this->userID)
                     ->where('kid','=',$this->kurs)
                     ->get();
        if ($comples != '')
        {
            $joriy = DB::table('v_joriynazorat')->get()->sortDesc();
        }
//        $guruhs =DB::table('v_comples')
//                    ->where('uid','=',$this->userID)
//                    ->where('kid','=',$this->kurs)
//                    ->where('id','=',$this->fan)
//                    ->get();

        //dd($comples);
//        $students = DB::table('v_students')
//            ->where('gid','=',$this->guruh)
//            ->get();
       if ($this->fan != ' ')
       {
           $mavzu = DB::table('v_mavzu')->get()->sortDesc();
       }

        return view('livewire.user.mavzus.mavzus',compact(['comples','bosqich','joriy']))->extends('layouts.userApp2');
    }
}
