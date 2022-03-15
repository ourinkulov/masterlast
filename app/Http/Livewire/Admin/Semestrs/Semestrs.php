<?php

namespace App\Http\Livewire\Admin\Semestrs;

use App\Models\Semestr;
use App\Models\Studyyear;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Semestrs extends Component
{
    public $studyyears;
    public $studyyear;
    public $updstudyyear;
    public $semestrs;
    public $semestr;
    public $updsemestr;
    public $ids;
    public function render()
    {

        $this->semestrs = DB::table('v_semestrs')->select('id','semestrName','studyyear')->get();
        //$this->studyyears = DB::table('studyyears')->select('id','studyyear')->get();
        $this->studyyears = Studyyear::all();
        return view('livewire.admin.semestrs.semestrs')->extends('layouts.adminApp2');
    }
    public function resetinput()
    {
        $this->studyyear='';
        $this->semestr='';
    }
    public function store()
    {
        $semestrSaved = $this->validate(
            [
                'studyyear'=>'required',
                'semestr'=>'required'
            ]
        );
        if ($semestrSaved)
        {
            $sem = new Semestr();
            $sem->studyyear_id = $this->studyyear;
            $sem->semestrName = $this->semestr;
                if ($sem->save())
                {
                    session()->flash('message-suc','Saqlandi');
                    $this->resetInput();
                    $this->emit('kafedraAdded');
                } else
                {
                    session()->flash('message-dan','Xatolik');
                    $this->resetInput();
                    $this->emit('kafedraAdded');
                }

        }
    }
    public function edit($id)
    {

        $seme = DB::table('semestrs')->select('id','semestrName','studyyear_id')->where('id',$id)->first();
        $this->ids=$seme->id;
        $this->updstudyyear=$seme->studyyear_id;
        $this->updsemestr=$seme->semestrName;
    }
    public function update()
    {
        if (!is_null($this->ids))
        {
            $validator = $this->validate([
                'updstudyyear'=>'required',
                'updsemestr'=>'required'
            ]);
            $sYear = \App\Models\Semestr::find($this->ids);
            $sYear->update(
                [
                    'studyyear_id'=>$this->updstudyyear,
                    'semestrName'=>$this->updsemestr
                ]);
            if ($sYear)
            {
                session()->flash('message-suc','O\'zgartirildi');
                $this->resetInput();
                $this->emit('kafedraAdded');
            } else
            {
                session()->flash('message-dan','Xatolik');
                $this->resetInput();
                $this->emit('kafedraAdded');
            }
        }
    }
    public function delete($id)
    {
        if ($id)
        {
            $wilDeleting = \App\Models\Semestr::where('id',$id)->delete();
            if ($wilDeleting)
            {
                session()->flash('message-dan','O\'chirildi');
            }
            else
            {
                session()->flash('message-dan','Xatolik');
            }
        }
    }

}
