<?php

namespace App\Http\Livewire\Admin\Oraliqnazorats;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Oraliqnazorat;

class Oraliqnazorats extends Component
{
    public $userID,$bosqichid,$complesid,$name,$onid;
    public function render()
    { $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();

        $comples= DB::table('v_comples')
            ->where('kid','=',$this->bosqichid)
            ->get();
        $oraliq = '';
        if ($this->complesid != '')
        {
            $oraliq = DB::table('v_oraliqnazorat')
                ->select('id','name','fanName','semestrName','studyyear','status','updated_at')
                ->where('comples_id',$this->complesid)
                ->get()
                ->sortDesc();
        }
        return view('livewire.admin.oraliqnazorats.oraliqnazorats',compact(['bosqich','comples','oraliq']))->extends('layouts.adminApp2');
    }

    public function store()
    {
        $valid = $this->validate([
            'name'=>'required',
            'complesid'=>'required'
        ]);
        if ($valid)
        {
            if (Oraliqnazorat::create([
                'name'=>$this->name,
                'comples_id'=>$this->complesid,
                'status'=>1,
                'creator'=>Auth::user()->name
            ]))
            {
                $this->resetVal();
                $this->emit('oncreated');
                session()->flash('message','Oraliq nazorat yaratildi');
            }
            else
            {
                $this->resetVal();
                $this->emit('oncreated');
                session()->flash('message-dan','Xatolik yuz berdi');
            }
        }
    }

    public function resetVal()
    {
        $this->complesid = '';
        $this->name = '';
    }

    public function onchange()
    {
        $this->complesid = '';
    }

    public function changeToOpen($id)
    {
        $this->onid = $id;
        if ($this->onid != '')
        {
            $on = Oraliqnazorat::find($this->onid);
            if ($on->update(['status'=>2]))
            {
                $this->resetID();

                session()->flash('message','Ruxsat berildi !!!');
            }
            else
            {
                $this->resetID();

                session()->flash('message-dan','Xatolik yuz berdi');
            }

        }
        else
        {
            $this->resetID();

            session()->flash('message-dan','Xatolik yuz berdi');
        }

    }
    public function changeToClose($id)
    {
        $this->onid = $id;
        if ($this->onid != '')
        {
            $on = Oraliqnazorat::find($this->onid);
            if ($on->update(['status'=>1]))
            {
                $this->resetID();

                session()->flash('message-dan','Ruxsat yopildi !!!');
            }
            else
            {
                $this->resetID();

                session()->flash('message-dan','Xatolik yuz berdi');
            }

        }
        else
        {
            $this->resetID();

            session()->flash('message-dan','Xatolik yuz berdi');
        }

    }
    public function resetID()
    {
        $this->onid = '';
    }



    public function changeToOpen2($id)
    {
        $this->onid = $id;
        if ($this->onid != '')
        {
            $on = Oraliqnazorat::find($this->onid);
            if ($on->update(['status2'=>2]))
            {
                $this->resetID();

                session()->flash('message','Ruxsat berildi !!!');
            }
            else
            {
                $this->resetID();

                session()->flash('message-dan','Xatolik yuz berdi');
            }

        }
        else
        {
            $this->resetID();

            session()->flash('message-dan','Xatolik yuz berdi');
        }

    }
    public function changeToClose2($id)
    {
        $this->onid = $id;
        if ($this->onid != '')
        {
            $on = Oraliqnazorat::find($this->onid);
            if ($on->update(['status2'=>1]))
            {
                $this->resetID();

                session()->flash('message-dan','Ruxsat yopildi !!!');
            }
            else
            {
                $this->resetID();

                session()->flash('message-dan','Xatolik yuz berdi');
            }

        }
        else
        {
            $this->resetID();

            session()->flash('message-dan','Xatolik yuz berdi');
        }

    }
}
