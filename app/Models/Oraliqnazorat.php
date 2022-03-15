<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oraliqnazorat extends Model
{
    use HasFactory;
    protected $table = 'oraliqnazorats';
    protected $fillable = ['name','comples_id','status','creator','deletor','status2'];
}
