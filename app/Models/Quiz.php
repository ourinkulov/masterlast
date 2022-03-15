<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $fillable = ['quizName','kursid','creator','creator_id','created_at','updated_at','updator','updator_id'];

    public function questions()
    {
        return $this->hasMany(\App\Models\Question::class);
    }
}
