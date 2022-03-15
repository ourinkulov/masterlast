<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Studyyear;
class Semestr extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'semestrs';
    protected $fillable = ['id','semestrName','studyyearID'];

    public function semestrStudyyear()
    {
        return $this->belongsTo(\App\Models\Studyyear::class);
    }
}
