<?php

namespace App\Http\Livewire\User\Showallmarks;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Showallmarks extends Component
{
    public $userID,$bosqichid='',$gid='',$jnid='',$complesid='',$joriynazoratscount,$oraliqnazoratcount=null,$oraliqcount='';
    public $fanname='';
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
                ->where('uid','=',$this->userID)
                ->get();
        }
        $oraliq = '';
        $sumstudent = '';
        $joriynazorats = '';
        $jurnals = '';
        $studentonsum = '';

        if ($this->complesid != '')
        {
            $joriynazorats = DB::table('v_joriynazorat')
                ->select('id','name','comples_id')
                ->where('gid',$this->gid)
                ->get();
            $this->joriynazoratscount = DB::table('v_joriynazorat')
                ->select('id')
                ->where('gid',$this->gid)
                ->where('comples_id',$this->complesid)
                ->count();
            $this->oraliqnazoratcount = DB::table('v_oraliqnazorat')
                ->where('gid',$this->gid)
                ->where('comples_id',$this->complesid)
                ->count();


            $jurnals
                =
                User::query()
                    ->where('guruh',$this->gid)
                    //->orderByDesc('id')
                    ->get();
            //dd($jurnals->jnjurnal);

//            $students = DB::table('v_jnjurnals')
//                ->select('id','jnid','name','jnName','baho')
//                ->where('guruh',$this->gid)
//                ->where('jnid',$this->jnid)
//                ->where('comples_id',$this->complesid)
////                ->inRandomOrder()
//                ->get();
            $sumstudent = DB::table('v_joriysumpocomples')
                ->select('name','jn')
                ->where('guruh',$this->gid)

                ->where('comples_id',$this->complesid)

                ->get();
//            if ()
//            {
//                $studentonsum=DB::table('v_students')
//
//                    ->leftJoin('v_joriysumpocomples','v_students.id','=','v_joriysumpocomples.id')
//                    ->leftJoin('v_studentonsum','v_students.id','=','v_studentonsum.id')
//
//                    ->select('v_students.id','v_students.name','v_studentonsum.oraliq','v_joriysumpocomples.jn','v_showallyakuniy.yakuniy')
//                    ->where('v_joriysumpocomples.comples_id','=',$this->complesid)
//                    ->where('v_studentonsum.comples_id','=',$this->complesid)
//
//                    ->where('v_students.gid',$this->gid)
//                    ->orderBy('v_students.id')
//                    ->get();
//            }
            $studentonsum=DB::table('v_students')

                ->leftJoin('v_joriysumpocomples','v_students.id','=','v_joriysumpocomples.id')
                ->leftJoin('v_studentonsum','v_students.id','=','v_studentonsum.id')
                ->leftJoin('v_showallyakuniy','v_students.id','=','v_showallyakuniy.id')
                ->select('v_students.id','v_students.name','v_studentonsum.oraliq','v_joriysumpocomples.jn','v_showallyakuniy.yakuniy')
                ->where('v_joriysumpocomples.comples_id','=',$this->complesid)
                ->where('v_studentonsum.comples_id','=',$this->complesid)
                ->where('v_showallyakuniy.comple_id','=',$this->complesid)
                ->where('v_students.gid',$this->gid)
                ->orderBy('v_students.id')
                ->get();
            $this->oraliqcount = DB::table('v_onjadval_new')
                ->where('guruh',$this->gid)
                ->where('comples_id',$this->complesid)
                ->count();
//            $oraliq = DB::table('v_joriynazorat')
//                ->select('id','name')
//                ->where('comples_id',$this->complesid)
//                ->get()
//                ->sortDesc();
            //dd($oraliq);
            $fanname2 = DB::table('v_comples')->select('fName')
                ->where('id','=',$this->complesid)
                ->first();
            $this->fanname = $fanname2->fName;
            //dd($this->fanname = $fanname2->fName);
        }



        return view('livewire.user.showallmarks.showallmarks',
            compact('bosqich','guruh','oraliq','comples','sumstudent','joriynazorats','jurnals','studentonsum'))->extends('layouts.App');
    }
}
