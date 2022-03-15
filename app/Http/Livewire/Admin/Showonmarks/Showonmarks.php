<?php

namespace App\Http\Livewire\Admin\Showonmarks;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Showonmarks extends Component
{
    public $userID,$bosqichid='',$gid='',$onid='',$complesid='';
    public function render()
    {
        $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();
        $guruh = '';
        if ($this->bosqichid != '')
        {
            $guruh = DB::table('guruhs')
                ->select('id','group')
                ->where('kurs',$this->bosqichid)
                ->get();
        }
        $comples = '';
        if ($this->gid != '')
        {
            $comples= DB::table('v_comples')
                ->where('kid','=',$this->bosqichid)
                ->where('gid','=',$this->gid)
                ->get();
        }
        $oraliq = '';
        if ($this->complesid != '')
        {
            $oraliq = DB::table('v_oraliqnazorat')
                ->select('id','name')
                ->where('comples_id',$this->complesid)
                ->get()
                ->sortDesc();
            //dd($oraliq);
        }
        $students = '';
        if ($this->onid != '')
        {
            $students = DB::table('v_onjurnals')
                ->select('sid','onid','name','randomnum','onName','baho')
                ->where('guruh',$this->gid)
                ->where('onid',$this->onid)
                ->where('comples_id',$this->complesid)
//                ->inRandomOrder()
                ->get();
        }
        return view('livewire.admin.showonmarks.showonmarks',compact('bosqich','guruh','comples','oraliq','students'))->extends('layouts.adminApp2');
    }
}
