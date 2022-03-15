<?php

namespace App\Http\Livewire\Admin\Studyyear;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Studyyear extends Component
{
    public $studyyearName;
    public $updstudyyearName;
    public $ids;
    public $studyyears;

    public function render()
    {
        $this->studyyears = \App\Models\Studyyear::all();

        return view('livewire.admin.studyyear.studyyear')->extends('layouts.adminApp2');
    }
    public function resetInput(){
        $this->studyyearName = '';
    }
    public function store(){
        $validated = $this->validate([
            'studyyearName'=>'required'
        ]);
        $creator = Auth::user()->name;
        if ($validated){
            $studyyear = new \App\Models\Studyyear();
            $studyyear->studyyear=$this->studyyearName;

            try {

                    if($studyyear->save())
                    {
                        session()->flash('message-suc','O\'quvyili qo\'shildi');
                        $this->resetInput();
                        $this->emit('kafedraAdded');
                    } else
                    {
                        session()->flash('message-dan','Xatolik');
                        $this->resetInput();
                        $this->emit('kafedraAdded');
                    }

            }
            catch (\Exception $exception)
            {
                $er = $exception->getCode();
                if ($er=='23000')
                {
                    session()->flash('message-dan','Bunday yil mavjud');
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

    }
    public function edit($id)
    {

        $sy = DB::table('studyyears')->select('id','studyyear')->where('id',$id)->first();
        $this->ids=$sy->id;
        $this->updstudyyearName=$sy->studyyear;

    }
    public function update()
    {
        if (!is_null($this->ids))
        {
            $validator = $this->validate([
                'updstudyyearName'=>'required'
            ]);
            $sYear = \App\Models\Studyyear::find($this->ids);
            $sYear->update(
                [
                    'studyyear'=>$this->updstudyyearName
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
            $wilDeleting = \App\Models\Studyyear::where('id',$id)->delete();
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
