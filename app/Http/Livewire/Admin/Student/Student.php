<?php

namespace App\Http\Livewire\Admin\Student;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class Student extends Component
{
    use WithFileUploads;
    public $students;
    public $ids;
    public $name;
    public $email;
    public $password;
    public $updName;
    public $guruh;
    public $updEmail;
    public $guruhs;
    public $kursID;
    public $gName;
    public $updPassword;
    public $updkursID;
    public $guruhsFor;
    public $updguruhID;
    public $kurs;
    public $kursupdate,$image;

    public function render()
    {
        $this->kurs = DB::table('kurs')->select('id','kurs')->get();

        $this->guruhsFor =[];
        if ($this->updkursID != '')
        {$this->guruhsFor = DB::table('guruhs')->select('id','group')->where('kurs',$this->updkursID)->get();}
        $this->students = DB::table('v_students')->get();

        $this->kursupdate = DB::table('kurs')->select('id','kurs')->get();
        $this->guruhs = DB::table('guruhs')->select('id','group','kurs')->where('kurs',$this->kursID)->get();
        //dd($kursupdate);
        return view('livewire.admin.student.student')->extends('layouts.adminApp2');
    }
//    public function getGuruh(){
//        $this->guruhsFor = DB::table('guruhs')->select('id','group','kurs')->where('kurs',$this->updkursID)->get();
//    }
    public function resetInput(){
        $this->kursID='';
        $this->email='';
        $this->name='';
        $this->password='';
        $this->gName='';
    }
    public function store(){

        try {

            $creator = Auth::user()->name;

            $validated = $this->validate([
                'kursID'=>'required',
                'name'=>'required',
                'password'=>'required',
                'email'=>'required',
                'gName'=>'required'
            ]);

            if ($validated)
            {

                $user = New User();
                $user->guruh = $this->gName;
                $user->creator = $creator;
                $user->name = $this->name;
                $user->email = $this->email;
                $user->password = Hash::make($this->password);
                $user->role = 3;
                //dd($user);
                if($user->save())
                {
                    //dd($creator);
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
            else
            {
                dd('Nooooooooooooooo');
            }
        }
        catch (\Exception $exception)
        {
          if ($exception->getCode()=='23000')
          {
//              return back()->withError($exception->getMessage())->withInput();
              session()->flash('message-dan','Bunday Email tizimda mavjud');
              $this->resetInput();
              $this->emit('kafedraAdded');
          }


        }
    }
    public function edit($id)
    {
        $user = DB::table('v_students')->where('id',$id)->first();
        $this->ids = $user->id;
        $this->updName = $user->name;
        $this->updEmail = $user->email;


    }
    public function update()
    {
        $this->validate([
            'updguruhID'=>'required',
            'updName'=>'required',
            'updEmail'=>'required',
            'updPassword'=>'required'
        ]);
        if ($this->ids)
        {
            $user = User::find($this->ids);
            $user->update([
                'guruh'=> $this->updguruhID,
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

    //Tinglovchi rasmini qo'shish
    public function addImageID($id)
    {
        $this->ids = $id;
    }
    public function addImage()
    {
        $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $fileName = time().'_'.$this->image->getClientOriginalName();
        $filePath = $this->image->storeAs('images', $fileName, 'public');

        //$upload = $this->image->move(public_path('images'), $fileName);
        $user = User::find($this->ids);
        //dd($user->name);

        /* Store $imageName name in DATABASE from HERE */
        if ($user->update(['image'=>$fileName]))
        {

            session()->flash('message','Qo\'shildi');
        }
        else
        {
            session()->flash('message-dan','Xatolik');
        }



    }

}
