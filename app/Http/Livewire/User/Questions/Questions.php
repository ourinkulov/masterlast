<?php

namespace App\Http\Livewire\User\Questions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Question;

class Questions extends Component
{
    public $pid;
    public $av;
    public $bv;
    public $cv;
    public $dv;
    public $cans;
    public $quetext;
    public $cre;
    public $creid;
    public $questions;


    public function mount($id)
    {
        $this->pid = $id;
        $this->cre = Auth::user()->name;
        $this->creid = Auth::user()->id;
    }
    public function render()
    {
        $this->questions = DB::table('v_questions')
            ->where('creator_id',$this->creid)
            ->where('quizzes_id',$this->pid)->get();
        return view('livewire.user.questions.questions')->extends('layouts.userApp');;
    }
    public function resetInput(){
        $this->av='';
        $this->bv='';
        $this->cv='';
        $this->dv='';
        $this->cans='';
        $this->quetext='';
    }
    public function store(){
        $this->validate([
            'av'=>'required',
            'bv'=>'required',
            'cv'=>'required',
            'dv'=>'required',
            'cans'=>'required',
            'quetext'=>'required',
        ]);
        $que = New Question();
        $que->question=$this->quetext;
        $que->ans1=$this->av;
        $que->ans2=$this->bv;
        $que->ans3=$this->cv;
        $que->ans4=$this->dv;
        $que->ans5=$this->cans;
        $que->creator=$this->cre;
        $que->creator_id=$this->creid;
        $que->quizzes_id=$this->pid;
        if($que->save())
        {
            session()->flash('message-suc','Savol qo\'shildi');
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
}
