<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yakuniynazorat extends Model
{
    use HasFactory;
    protected $fillable = ['name','comples_id','creator','deletor','status'];
    protected $table = 'yakuniynazorats';
}
