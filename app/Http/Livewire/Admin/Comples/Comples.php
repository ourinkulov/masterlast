<?php

namespace App\Http\Livewire\Admin\Comples;

use App\Models\Comple;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Comples extends Component
{
    public $comples;
    public $createstudyyearName;
    public $updatestudyyearName;
    public $sy;
    public $createSemestr;
    public $updateSemestr;
    public $semestrs;
    public $createkursName;
    public $updatekursName;
    public $kurs;
    public $createguruhName;
    public $updateguruhName;
    public $guruh;
    public $teachers;
    public $createteacherName;
    public $updateteacherName;
    public $kafedra;
    public $createkafName;
    public $updatekafName;
    public $fans;
    public $createfanName;
    public $updatefanName;
    public $createcatName;
    public $updatecatName;
    public $ids;
    public $fanName;

    public function render()
    {
        $this->fans = DB::table('fans')->select('id','fName')->where('kafId',$this->createkafName)->get();
        $this->kafedra = DB::table('kafedras')->get();
        $this->teachers = DB::table('v_usertokafedra')->select('id','name')->where('kafId',$this->createkafName)->get();
        $this->kurs = DB::table('kurs')->get();
        $this->guruh = DB::table('guruhs')->where('kurs',$this->createkursName)->get();
        $this->sy = DB::table('studyyears')->select('id','studyyear')->get();
        $this->comples = DB::table('v_comples')->orderBy('id')->get();
        $this->semestrs = DB::table('semestrs')->select('id','semestrName')->where('studyyear_id',$this->createstudyyearName)->get();
        if ($this->updatestudyyearName) {$this->semestrs = DB::table('semestrs')->select('id','semestrName')->where('studyyear_id',$this->updatestudyyearName)->get();}
        if ($this->updatekursName) {$this->guruh = DB::table('guruhs')->where('kurs',$this->updatekursName)->get();}
        if ($this->updatekafName) {
            $this->teachers = DB::table('v_usertokafedra')->select('id','name')->where('kafId',$this->updatekafName)->get();
            $this->fans = DB::table('fans')->select('id','fName')->where('kafId',$this->updatekafName)->get();
        }
        $onjur = Comple::all();

       // dd($onjur);
        return view('livewire.admin.comples.comples',compact('onjur'))->extends('layouts.adminApp2');
    }
    public function getSemestrForUpdate()
    {
        $this->semestrs = DB::table('semestrs')->select('id','semestrName')->where('studyyearID',$this->createstudyyearName)->get();
    }
    public function store()
    {
        $this->validate([
            'createstudyyearName'=>'required',
            'createcatName'=>'required',
            'createSemestr'=>'required',
            'createkursName'=>'required',
            'createguruhName'=>'required',
            'createteacherName'=>'required',
            'createfanName'=>'required'
        ]);
        $complex = New Comple();
        $complex->studyyear=$this->createstudyyearName;
        $complex->semestr=$this->createSemestr;
        $complex->kurs=$this->createkursName;
        $complex->guruh=$this->createguruhName;
        $complex->teacher=$this->createteacherName;
        $complex->fan=$this->createfanName;
        $complex->fanName=$this->createcatName;
        if($complex->save())
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
    public function resetInput(){
        $this->createstudyyearName='';
        $this->createSemestr='';
        $this->createkursName='';
        $this->createguruhName='';
        $this->createteacherName='';
        $this->createfanName='';
    }
    public function delete($id){
        if ($id)
        {
            $kafDel = Comple::where('id',$id)->delete();
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
        $complex = DB::table('v_comples')->where('id',$id)->first();
        $this->ids = $complex->id;
        $this->updatecatName = $complex->fanName;
        $this->updatestudyyearName = $complex->studyyear;
        $this->updateSemestr = $complex->semestrName;

        $this->updatefanName = $complex->fName;
        $this->updateteacherName = $complex->name;
        $this->updatekursName = $complex->kurs;
        $this->updateguruhName = $complex->group;

    }
    public function update()
    {
        $this->validate([
            'updatecatName'=>'required',
            'updatestudyyearName'=>'required',
            'updateSemestr'=>'required',
            'updatefanName'=>'required',
            'updateteacherName'=>'required',
            'updatekursName'=>'required',
            'updateguruhName'=>'required',
        ]);
        if ($this->ids)
        {
            $complex = Comple::find($this->ids);
            $complex->update([
                'fanName'=> $this->updatecatName,
                'studyyear'=> $this->updatestudyyearName,

                'semestr'=> $this->updateSemestr,
                'fan'=> $this->updatefanName,
                'teacher'=> $this->updateteacherName,
                'kurs'=> $this->updatekursName,
                'guruh'=> $this->updateguruhName,
            ]);
            if ($complex)
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
