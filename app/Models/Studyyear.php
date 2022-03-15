<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Semestr;

class Studyyear extends Model
{
    use HasFactory;
    protected $fillable = ['id','studyyear'];
    protected $primaryKey = 'id';
    protected $table = 'studyyears';
    public function semestrsList()
    {
        return $this->hasMany(\App\Models\Semestr::class);
    }
}
