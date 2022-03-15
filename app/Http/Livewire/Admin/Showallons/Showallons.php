<?php

namespace App\Http\Livewire\Admin\Showallons;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Showallons extends Component
{
    public $jn, $marks;
    public function render()
    {
        $this->jn = DB::table('joriynazorats')->where('comples_id','=',8)->get();
        $this->marks = DB::table('jnjurnals')
            ->where('comple_id','=',8)
            ->where('jnid','=',8)
            ->get();
        return view('livewire.admin.showallons.showallons')->extends('layouts.adminApp2');
    }
}
