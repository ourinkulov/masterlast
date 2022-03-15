<?php

namespace App\Http\Livewire\Admin\Teachers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class Teachers extends Component
{
    public $teachers;
    public $kafedras;
    public $kafName;
    public $name;
    public $email;
    public $password;
    public $ids;
    public $updKafID;
    public $updName;
    public $updEmail;
    public $updPassword;
    public function render()
    {
        $this->kafedras = DB::table('kafedras')->select('id','kafName')->get();
        $this->teachers = DB::table('v_userTokafedra')->get();
        return view('livewire.admin.teachers.teachers')->extends('layouts.adminApp2');
    }

    public function edit($id)
    {
        $user = DB::table('v_usertokafedra')->where('id',$id)->first();
        $this->ids = $user->id;
        $this->updName = $user->name;
        $this->updEmail = $user->email;

    }
    public function update()
    {
        $this->validate([
            'updKafID'=>'required',
            'updName'=>'required',
            'updName'=>'required',
            'updPassword'=>'required'
        ]);
        if ($this->ids)
        {
            $user = User::find($this->ids);
            $user->update([
                'kafID'=> $this->updKafID,
                'name'=>$this->updName,
                'email'=>$this->updEmail,
                'password'=>Hash::make($this->updPassword)
            ]);
            if ($user)
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
            $kafDel = User::where('id',$id)->delete();
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
    public function resetInput(){
        $this->kafName='';
        $this->email='';
        $this->name='';
        $this->password='';
    }
    public function store(){
        $creator = Auth::user()->name;
        $validated = $this->validate([
            'kafName'=>'required',
            'name'=>'required',
            'password'=>'required',
            'email'=>'required',

        ]);
        if ($validated)
        {
            $user = New User();
            $user->kafID = $this->kafName;
            $user->creator = $creator;
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = Hash::make($this->password);
            $user->role = 2;
            if($user->save())
            {
                session()->flash('message-suc','O\'qituvchi qo\'shildi');
                $this->resetInput();
                $this->emit('kafedraAdded');
            }
            else
            {
                session()->flash('message-dan','Xatolik. Yana bir urinib kuring');
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

}
