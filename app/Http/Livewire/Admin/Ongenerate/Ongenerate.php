<?php

namespace App\Http\Livewire\Admin\Ongenerate;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Ongenerate as ON;

class Ongenerate extends Component
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
            $students = DB::table('v_gennumbers')
                ->select('id','uid','name','randomnum')
                ->where('guruh',$this->gid)
                ->where('onid',$this->onid)
                ->where('comples_id',$this->complesid)
                ->inRandomOrder()
                ->get();
        }



        return view('livewire.admin.ongenerate.ongenerate',compact(['bosqich','comples','oraliq','guruh','students']))->extends('layouts.adminApp2');
    }
//    public function helpgen(){
//        $this->generate($this->complesid,$this->onid);
//    }
    public function generate()
    {
//        $this->complesid = $cid;
//        $this->onid = $oid;
        //dd($oid);
        $studentsNum = User::all()
            ->where('role','=',3)
            ->where('guruh','=',$this->gid)
            ->sortDesc();
        foreach ($studentsNum as $item)
        {
//            $usercounts = DB::table('ongenerates')
//            ->select('id')
//            ->where('uid',$item->id)
//            ->where('comples_id','=',$this->complesid)
//            ->where('onid','=',$this->onid)->first();
//            dd($usercounts);
             if(DB::table('ongenerates')
                 ->select('id')
                ->where('uid',$item->id)
                ->where('comples_id','=',$this->complesid)
                ->where('onid','=',$this->onid)->first()==NULL)
             {
                 \App\Models\Ongenerate::create([
                     'uid'=>$item->id,
                     'comples_id'=>$this->complesid,
                     'onid'=>$this->onid,
                     'randomnum'=>random_int(1000000,9999999),
                     'status'=>1
                 ]);
             }

        }
    }
}
