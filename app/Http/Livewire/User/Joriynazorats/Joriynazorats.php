<?php

namespace App\Http\Livewire\User\Joriynazorats;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Joriynazorat;

class Joriynazorats extends Component
{
    public $userID,$complesid,$joriyid,$bosqichid,$kurs,$name;
    public function render()
    {
        $this->userID = Auth::user()->getAuthIdentifier();
        $bosqich = DB::table('kurs')->get();
        //dd($bosqich);

          $comples= DB::table('v_comples')
              ->where('uid','=',$this->userID)
              ->where('kid','=',$this->bosqichid)
              ->get();


            $joriy = DB::table('v_joriynazorat')
                ->where('comples_id','=',$this->complesid)
                ->get()
                ->sortDesc();

        return view('livewire.user.joriynazorats.joriynazorats',compact(['comples','bosqich','joriy']))->extends('layouts.userApp2');
    }

    public function resetVal()
    {
        $this->bosqichid = '';
        $this->name = ' ';
        $this->complesid = '';
    }

    public function store()
    {
        $valid = $this->validate([
            'name'=>'required',
            'complesid'=>'required'
        ]);
        if ($valid)
        {
            if (Joriynazorat::create([
                'name'=>$this->name,
                'comples_id'=>$this->complesid,
            ]))
            {
                $this->resetVal();
                $this->emit('jncreated');
                session()->flash('message','Joriy nazorat yaratildi');
            }
            else
            {
                $this->resetVal();
                $this->emit('jncreated');
                session()->flash('message-dan','Xatolik yuz berdi');
            }
        }
    }
}
