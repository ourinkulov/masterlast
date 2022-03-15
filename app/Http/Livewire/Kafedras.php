<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Kafedra;
use Illuminate\Support\Facades\Auth;

class Kafedras extends Component
{
    public $kafName;
    public $kafedras;
    public $creator;
    public $ids;
    public function resetInput(){
        $this->kafName='';
    }
    public function store(){
        $creator = Auth::user()->name;
        $validated = $this->validate([
            'kafName'=>'required'
        ]);
        if ($validated)
        {
            $kafedra = New Kafedra();
            $kafedra->kafName = $this->kafName;
            $kafedra->creator = $creator;
            if($kafedra->save())
            {
                session()->flash('message-suc','Kafedra qo\'shildi');
                $this->resetInput();
                $this->emit('kafedraAdded');
            }
            else
            {
                session()->flash('message-suc','Kafedra qo\'shildi');
                $this->resetInput();
                $this->emit('kafedraAdded');
            }
        }


//        if ( Kafedra::create($validated))
//        {
//            session()->flash('message-suc','Kafedra qo\'shildi');
//            $this->resetInput();
//            $this->emit('kafedraAdded');
//
//        }else{
//
//            session()->flash('message-dan','Kafedra qo\'shilmadi. Yana urinib kuring');
//            $this->resetInput();
//            $this->emit('kafedraAdded');
//
//        }


    }
    public function edit($id)
    {
        $kafedra = Kafedra::where('id',$id)->first();
        $this->ids = $kafedra->id;
        $this->kafName = $kafedra->kafName;
    }
    public function update()
    {
        $this->validate([
            'kafName'=>'required',
        ]);
        if ($this->ids)
        {
            $kafedra = Kafedra::find($this->ids);
            $kafedra->update([
                'kafName'=> $this->kafName
            ]);
            if ($kafedra)
            {
                session()->flash('message-suc','O\'zgardi');
            }
            else
            {
                session()->flash('message-dan','Xatolik');
            }
            $this->resetInput();
            $this->emit('kafedraUzgardi');
        }
    }
    public function delete($id){
        if ($id)
        {
            $kafDel = Kafedra::where('id',$id)->delete();
            if ($kafDel)
            {
                session()->flash('message-dan','O\'chirildi');
            }
            else
            {
                session()->flash('message-dan','Xatolik');
            }
        }
    }
    public function render()
    {
        $this->kafedras = DB::table('kafedras')->select('id','kafName')->get();

        return view('livewire.kafedras')->extends('layouts.adminApp2');
    }
}
