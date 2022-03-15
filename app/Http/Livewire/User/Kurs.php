<?php

namespace App\Http\Livewire\User;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Collection;



class Kurs extends Component
{
    public $kurs;
    public $studyyear;
    public $semestr;
    public $syID;
    public $semID;
    public $uid;

    public function render()
    {
        $this->uid = Auth::user()->id;
        $this->studyyear = DB::table('studyyears')->select('id','studyyear')->where('is_current','=',true)->get();
        $this->semestr = DB::table('semestrs')->select('id','semestrName')->where('studyyear_id','=',$this->syID)->get();
        $this->kurs = DB::table('v_comples')->select('id','fanName')
            ->where('sid',$this->syID)
            ->where('semid',$this->semID)
            ->where('uid',$this->uid)
            ->get();

        return view('livewire.user.kurs')->extends('layouts.userApp2');
    }
}
