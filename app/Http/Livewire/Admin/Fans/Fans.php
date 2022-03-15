<?php

namespace App\Http\Livewire\Admin\Fans;

use App\Models\Fan;
use App\Models\Kafedra;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Fans extends Component
{
    public $kafedras;
    public $kafID;
    public $fName;
    public $fans;
    public $ids;
    public function render()
    {
        $this->fans = DB::table('v_fanTokafedras')->select('id','fName','kafName')->get();
        $this->kafedras = DB::table('kafedras')->select('id','kafName')->get();
        return view('livewire.admin.fans.fans')->extends('layouts.adminApp2');
    }
    public function resetInput(){
        $this->kafID='';
        $this->fName='';
    }
    public function store(){
        $this->validate([
            'kafID'=>'required',
            'fName'=>'required'
        ]);
        $fan = New Fan();
        $fan->fName=$this->fName;
        $fan->kafID=$this->kafID;
        if($fan->save())
        {
            session()->flash('message-suc','Fan qo\'shildi');
            $this->resetInput();
            $this->emit('kafedraAdded');
        }
        else
        {
            session()->flash('message-dan','Xatolik mavjud Qaytadan kiriting');
            $this->resetInput();
            $this->emit('kafedraAdded');
        }

    }
    public function delete($id){
        if ($id)
        {
            $kafDel = Fan::where('id',$id)->delete();
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

    public function edit($id)
    {
        $fan = DB::table('v_fantokafedras')->where('id',$id)->first();
        $this->ids = $fan->id;
        $this->fName = $fan->fName;
    }
    public function update()
    {
        $this->validate([
            'kafID'=>'required',
            'fName'=>'required',
        ]);
        if ($this->ids)
        {
            $fan = Fan::find($this->ids);
            $fan->update([
                'kafID'=> $this->kafID,
                'fName'=> $this->fName
            ]);
            if ($fan)
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
}
