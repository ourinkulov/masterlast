<?php

namespace App\Http\Livewire\Admin\Yakuniynazorats;

use App\Models\Yakuniynazorat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Yakuniynazorats extends Component
{
    public $userID,$bosqichid,$complesid,$name,$onid,$yakuniynazorat,$ynid;
    public function render()
    {
        $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();

        $comples= DB::table('v_comples')
            ->where('kid','=',$this->bosqichid)
            ->get();
        $yakuniy = '';
        if ($this->complesid != '')
        {
            $yakuniy = DB::table('v_yakuniynazorat')
                ->select('id','yakuniyname','fanName','semestrName','studyyear','status','updated_at')
                ->where('comples_id',$this->complesid)
                ->get()
                ->sortDesc();
        }

        return view('livewire.admin.yakuniynazorats.yakuniynazorats',compact('bosqich','comples','yakuniy'))->extends('layouts.adminApp2');;
    }
    public function store()
    {
        $v = $this->validate(
            [
              'name'=>'required'
            ]
        );
        if ($v)
        {
           if(Yakuniynazorat::create(
                [
                    'name'=>$this->name,
                    'comples_id'=>$this->complesid
                ]
            ))

           {
               $this->resetVal();
               $this->emit('yncreated');
               session()->flash('message','Yakuniy nazorat yaratildi');
           }
           else
           {
               $this->resetVal();
               $this->emit('yncreated');
               session()->flash('message-dan','Xatolik yuz berdi');
           }
        }
    }
    public function resetVal()
    {

        $this->name = '';
    }
    public function edit($id)
    {
        $this->ynid = $id;
        $y = Yakuniynazorat::find($id);
        $this->name = $y->name;

    }
    public function update()
    {
        $v = $this->validate(['name'=>'required']);
        if ($v)
        {
            $yn = Yakuniynazorat::find($this->ynid);

            if ($yn->update(['name'=>$this->name]))
            {
                $this->resetVal();
                $this->emit('ynupdated');
                session()->flash('message','O\'zgartirildi');
            }
            else
            {
                $this->resetVal();
                $this->emit('ynupdated');
                session()->flash('message-dan','Xatolik yuz berdi');
            }
        }

    else
        {
            $this->resetVal();
            $this->emit('ynupdated');
            session()->flash('message-dan','Xatolik yuz berdi');
        }
    }

    public function delete($id)
    {
        if ($id!='')
        {
           $ynaz =  Yakuniynazorat::find($id);
            if ($ynaz->delete())
            {

                $this->emit('deleted');
                session()->flash('message-dan','O\'chirildi');
            }
            else
            {
                $this->resetVal();
                $this->emit('deleted');
                session()->flash('message-dan','Xatolik yuz berdi');
            }

        }
    }
}
