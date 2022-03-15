<?php

namespace App\Http\Livewire\Admin\Guruhs;

use App\Models\Guruh;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Guruhs extends Component
{
    public $kursID;
    public $gName;
    public $guruhs;
    public $group;
    public $ids;
    public function render()
    {
        $this->guruhs = DB::table('v_guruh')->select('id','group','kurs')->get();
        return view('livewire.admin.guruhs.guruhs')->extends('layouts.adminApp2');
    }
    public function resetInput(){
        $this->kursID='';
        $this->gName='';
    }
    public function store(){
        $this->validate([
            'kursID'=>'required',
            'gName'=>'required'
        ]);
        $guruh = New Guruh();
        $guruh->group=$this->gName;
        $guruh->kurs=$this->kursID;
        if($guruh->save())
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
    public function edit($id)
    {
        $guruh = Guruh::where('id',$id)->first();
        $this->ids = $guruh->id;
        $this->gName = $guruh->group;

    }
    public function update()
    {
        $this->validate([
            'gName'=>'required',
            'kursID'=>'required',
        ]);
        if ($this->ids)
        {

            $guruh = Guruh::find($this->ids);
            $guruh->update([
                'group'=> $this->gName,
                'kurs'=>$this->kursID
            ]);
            if ($guruh)
            {
                $this->resetInput();
                $this->emit('kafedraUzgardi');
                session()->flash('message-suc','O\'zgardi');
            }
            else
            {
                $this->resetInput();
                $this->emit('guruhUzgardi');
                session()->flash('message-dan','Xatolik');
            }

        }
    }
    public function delete($id){
        if ($id)
        {
            $kafDel = Guruh::where('id',$id)->delete();
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
}
