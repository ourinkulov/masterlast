<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jnjurnal;

class Comple extends Model
{
    use HasFactory;
    protected $fillable = ['id','studyyear','semestr','kurs','guruh','teacher','fan','fanName'];
    protected $primaryKey = 'id';
    protected $table = 'comples';

    public function jnjurnal(){
        return $this->hasMany(Jnjurnal::class);
}
}
