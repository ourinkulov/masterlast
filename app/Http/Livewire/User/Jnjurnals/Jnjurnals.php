<?php

namespace App\Http\Livewire\User\Jnjurnals;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Jnjurnal;
use function PHPUnit\Framework\isNull;
use function PHPUnit\Framework\isTrue;

class Jnjurnals extends Component
{
    public $complesid, $userID, $bosqichid, $jnid, $baxo,$gid;
    public $jurnalid;
    public $sid,$baho;



    public function render()
    {
        $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();

        $comples= DB::table('v_comples')
            ->where('uid','=',$this->userID)
            ->where('kid','=',$this->bosqichid)
            ->get();

           $joriy = DB::table('v_joriynazorat')
           ->where('comples_id','=',$this->complesid)
           ->get()
           ->sortDesc();
           $guruh = DB::table('v_comples')
               ->select('gid','group')
               ->where('id',$this->complesid)
               ->get();
        $students = '';
        $students2 = '';
           if ($this->gid != '')
           {
//               $students = DB::table('v_jnjurnals')
//                   ->select('id','name','baho','jnName','status')
//                   ->where('gid',$this->gid)
//                   ->where('jnid',$this->jnid)
//                   ->orwhere('status',null)
//                   ->get();
               $students = DB::table('v_students')
                   ->select('id','name')
                   ->where('guruh',$this->gid)
                   ->get();
           }
           if ($this->jnid != '')
           {
               $students2 = DB::table('v_jnjurnals')
                   ->select('id','name','baho','jnName','status','jnjurnalid')
                   ->where('guruh',$this->gid)
                   ->where('jnid',$this->jnid)
                   ->orderBy('id','DESC')
                   ->get();
           }
        return view('livewire.user.jnjurnals.jnjurnals',compact(['comples','bosqich','joriy','guruh','students','students2']))->extends('layouts.userApp2');
    }

    public function studentid($id)
    {
        $this->sid = $id;
    }

    public function store()
    {
        $valid = $this->validate(['baho'=>'required']);
        if ($valid)
        {

            $userCheck=DB::table('v_jnjurnals')
                ->where('jnid',$this->jnid)
                ->where('comples_id',$this->complesid)
                ->where('id',$this->sid)
                ->get();
            $recCount = $userCheck->count();
            //dd($recCount);
            //dd($this->complesid,$this->jnid,$this->sid,$this->userCheck);
            if ($recCount <= 0)
            {
                //dd('baxolandi');
                if (Jnjurnal::create([
                    'user_id'=>$this->sid,
                    'jnid'=>$this->jnid,
                    'baho'=>$this->baho,
                    'comple_id'=>$this->complesid,


                ]))
                {
                    $this->resetVal();
                    $this->emit('baholandi');
                    session()->flash('message','Baholandi');
                }
                else
                {
                    $this->resetVal();
                    $this->emit('baholandi');
                    session()->flash('message-dan','Xatolik yuz berdi');
                }
            }
            else
            {
                //dd('baxolanmadi');
                $this->resetVal();
                $this->emit('baholandi');
                session()->flash('message-dan','Ushbu magistrant avval baholangan !');
            }




        }
        else
        {
            $this->resetVal();
            $this->emit('baholandi');
            session()->flash('message-dan','Xatolik yuz berdi');
        }
    }





    public function update($id)
    {
       $this->jurnalid = $id;
    }
    public function renew()
    {
        $valid = $this->validate(['baho'=>'required']);
        if ($valid)
        {
            $joriyjurnal = Jnjurnal::find($this->jurnalid);
            if (
                $joriyjurnal->update([
                    'baho'=>$this->baho
                ])
            )
            {
                $this->resetVal();
                $this->emit('uzgartirildi');
                session()->flash('message','O\'zgartirildi');
            }
            else
            {
                $this->resetVal();
                $this->emit('uzgartirildi');
                session()->flash('message-dan','Xatolik yuz berdi');
            }
        }
        else
        {
            $this->resetVal();
            $this->emit('uzgartirildi');
            session()->flash('message-dan','Xatolik yuz berdi');
        }
    }

    public function resetVal()
    {
//        $this->sid = '';
        $this->baho = '';
//        $this->bosqichid = '';
//        $this->gid = '';

        $this->userCheck = '';
        $this->sid = '';
        $this->jurnalid = '';

    }
}
