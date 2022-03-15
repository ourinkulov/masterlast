<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ongenerate extends Model
{
    use HasFactory;
    protected $table = 'ongenerates';
    protected $fillable = ['uid','comples_id','onid','randomnum','status'];
}
