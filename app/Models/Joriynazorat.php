<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comple;
class Joriynazorat extends Model
{
    use HasFactory;
    protected $table = 'joriynazorats';
    protected $fillable = ['name','comples_id'];

    public function compleses()
    {
        return $this->belongsTo(Comple::class);
    }
}
