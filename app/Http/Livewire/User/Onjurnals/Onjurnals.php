<?php

namespace App\Http\Livewire\User\Onjurnals;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Onjurnal;
use App\Models\Ongenerate;

class Onjurnals extends Component
{
    public $complesid, $userID, $bosqichid, $onid, $baxo,$gid;
    public $sid,$baho,$randnumid;
    public $status=false;
    public function render()
    {
        $guruh = '';
        $comples = '';
        $oraliq = '';
        $students = '';
        $students2 = '';
        $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();

        if ($this->bosqichid != '')
        {
            $guruh = DB::table('guruhs')
                ->select('id','group')
                ->where('kurs',$this->bosqichid)
                ->get();
        }
        if ($this->gid!='')
        {
            $comples= DB::table('v_comples')
                ->where('uid','=',$this->userID)
                ->where('kid','=',$this->bosqichid)
                ->where('gid','=',$this->gid)
                ->get();
        }
        if ($this->complesid != '')
        {
            $oraliq = DB::table('v_oraliqnazorat')
                ->where('comples_id',$this->complesid)
                ->where('status','=',2)
                ->get();
            $oraliqs = DB::table('v_oraliqnazorat')
                ->select('status2')
                ->where('comples_id',$this->complesid)
//                ->where('status','=',2)
                ->first();
            if ($oraliqs){if ($oraliqs->status2 == 2){$this->status = 2;}else{$this->status=1;}}
            //dd($oraliqs->status==1);


        }
        if ($this->onid != '')
        {
            $students = DB::table('ongenerates')
                ->leftJoin('v_students','ongenerates.uid','=','v_students.id')
                ->select('v_students.id','ongenerates.randomnum','v_students.name')
                ->where('v_students.gid',$this->gid)
                ->where('ongenerates.onid',$this->onid)
                ->where('ongenerates.comples_id',$this->complesid)
                ->where('status','=',1)
//                ->where('status2','=',null)
                ->inRandomOrder()
                ->get();
            //dd($students);
            $students2 = DB::table('v_onjurnals2')
                ->select('sid','name','randomnum','baho','onid')
                ->where('guruh',$this->gid)
                ->where('comples_id',$this->complesid)
                ->where('onid',$this->onid)
                ->get();
        }

        return view('livewire.user.onjurnals.onjurnals',compact(['bosqich','guruh','comples','oraliq','students','students2']))->extends('layouts.userApp2');
    }

    public function studentid($id,$rid)
    {
        $this->sid = $id;
        $this->randnumid = $rid;
    }
    public function store()
    {
        $valid = $this->validate([
           'baho'=>'required'
        ]);
        $userCheck=DB::table('v_onjurnals')
            ->where('onid',$this->onid)
            ->where('comples_id',$this->complesid)
            ->where('sid',$this->sid)
            ->get();
        $recCount = $userCheck->count();

        //dd($recCount);
        //dd($this->complesid,$this->jnid,$this->sid,$this->userCheck);
        if ($recCount <= 0)
        {
        if ($valid)
        {
            if (Onjurnal::create(
                [

                    'user_id'=>$this->sid,
                    'onid'=>$this->onid,
                    'baho'=>$this->baho,
                    'creator'=>$this->userID,
                    'status2'=>2,
                    'comples_id'=>$this->complesid

                ]
            ))
            {

                //$onrandnumstatus = Ongenerate::query()
                   // ->select('randomnum')->where('randomnum','=',$this->randnumid)->first();
               // dd($onrandnumstatus);
                $this->emit('onbaholandi');
                session()->flash('message','ON baholandi !!!');
                $this->resetVal();
            }
            else
            {
                $this->emit('onbaholandi');
                session()->flash('message-dan','Xatolik yuz berdi');
                $this->resetVal();
            }
        }
        else
        {
            $this->emit('onbaholandi');
            session()->flash('message-dan','Xatolik yuz berdi');
            $this->resetVal();
        }
        }
        else
        {
            $this->emit('onbaholangan');
            session()->flash('message-dan','Ushbu magistrant baholangan');
            $this->resetVal();
        }
    }
    public function resetVal()
    {
        $this->baho = '';
//        $this->onid  = '';
    }

}
