<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kafedra extends Model
{
    use HasFactory;
    protected $fillable = ['kafName','creator','deletor'];
    protected $table = 'kafedras';
}
