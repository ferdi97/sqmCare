<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sqm extends Model
{
    use HasFactory;
    protected $table = 'sqm';
    protected $fillable = ['ncli','inet'];
}
