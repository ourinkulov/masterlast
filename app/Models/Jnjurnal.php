<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Jnjurnal extends Model
{
    use HasFactory;
    protected $table = 'jnjurnals';
    protected $fillable = ['user_id','jnid','baho','comple_id','status'];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
