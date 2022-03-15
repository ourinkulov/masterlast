<?php

namespace App\Http\Livewire\Admin\Showjnmarks;

use App\Models\Comple;
use App\Models\Joriynazorat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Showjnmarks extends Component
{
    public $userID,$bosqichid='',$gid='',$jnid='',$complesid='',$joriynazoratscount,$oraliqnazoratcount=null;
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
            $studentonsum=DB::table('v_students')

                ->leftJoin('v_joriysumpocomples','v_students.id','=','v_joriysumpocomples.id')
                ->leftJoin('v_studentonsum','v_students.id','=','v_studentonsum.id')
                ->select('v_students.id','v_students.name','v_studentonsum.oraliq','v_joriysumpocomples.jn')
                ->where('v_joriysumpocomples.comples_id',$this->complesid)
                ->where('v_studentonsum.comples_id',$this->complesid)
                ->where('v_students.gid',$this->gid)
                ->orderBy('v_students.id')
                ->get();
//            $oraliq = DB::table('v_joriynazorat')
//                ->select('id','name')
//                ->where('comples_id',$this->complesid)
//                ->get()
//                ->sortDesc();
            //dd($oraliq);
        }
        $students = '';

//        if ($this->jnid != '')
//        {
//            $joriynazorats = DB::table('v_joriynazorat')
//                ->select('id','name','comples_id')
//                ->where('gid',$this->gid)
//                ->get();
//            $jurnals
//                =
//                User::query()
//                ->where('guruh',$this->gid)
//                ->get();
//            //dd($jurnals->jnjurnal);
//
////            $students = DB::table('v_jnjurnals')
////                ->select('id','jnid','name','jnName','baho')
////                ->where('guruh',$this->gid)
////                ->where('jnid',$this->jnid)
////                ->where('comples_id',$this->complesid)
//////                ->inRandomOrder()
////                ->get();
//            $sumstudent = DB::table('v_joriysumpocomples')
//                ->select('name','jn')
//                ->where('guruh',$this->gid)
//
//                ->where('comples_id',$this->complesid)
//
//               ->get();
////            dd($sumstudent);
//
//        }
        return
            view('livewire.admin.showjnmarks.showjnmarks',
            compact('bosqich','guruh','oraliq','comples','sumstudent','joriynazorats','jurnals','studentonsum'))
                ->extends('layouts.adminApp2');
    }
}
