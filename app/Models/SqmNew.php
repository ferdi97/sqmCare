<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SqmNew extends Model
{
    use HasFactory;
    protected $fillable = [
        'inet',
        'ncli',
        'no_hp'
    ];
}
