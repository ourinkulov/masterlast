<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['quizzes_id','question','ans1','ans2','ans3','ans4','ans5','creator_id','creator'];
    protected $table = 'questions';


    public function quiz()
    {
        return $this->belongsTo(\App\Models\Quiz::class);
    }
}
