<?php

namespace App\Http\Livewire\User\Quiz;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Quiz extends Component
{
    public $fan;
    public $uid;
    public $uname;
    public $fanID;
    public $tName;
    public $quiz;
    public $ids;
    public $updtestname;
    public $updkursid;



    public function render()
    {
        $this->uid = Auth::user()->id;
        $this->uname = Auth::user()->name;
        $this->fan = DB::table('v_comples')->select('id','fanName')->where('uid',$this->uid)->get();
        $this->quiz = DB::table('v_quiz')->select('id','quizName','fanName','fName')->where('creator_id',$this->uid)->get();
        return view('livewire.user.quiz.quiz')->extends('layouts.userApp');
    }
    public function store(){
        $this->validate([
            'fanID'=>'required',
            'tName'=>'required'
        ]);
        $quiz = New \App\Models\Quiz();
        $quiz->kursid=$this->fanID;
        $quiz->quizName=$this->tName;
        $quiz->creator = $this->uname;
        $quiz->creator_id = $this->uid;
        if($quiz->save())
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
    public function resetInput()
    {
        $this->tName = '';
        $this->fanID = '';
    }
    public function delete($id){
        if ($id)
        {
            $kafDel = \App\Models\Quiz::where('id',$id)->delete();
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
        $fan = DB::table('v_quiz')->where('id',$id)->first();
        $this->ids = $fan->id;
        $this->updtestname = $fan->quizName;
        $this->updkursid = $fan->fanName;
    }
    public function update()
    {
        $this->validate([
            'updtestname'=>'required',
            'updkursid'=>'required',
        ]);
        if ($this->ids)
        {
            $fan = \App\Models\Quiz::find($this->ids);
            $fan->update([
                'quizName'=> $this->updtestname,
                'kursid'=> $this->updkursid,
                'updator'=>$this->uname,
                'updator_id'=>$this->uid,
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
