<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SqmNew extends Model
{
    use HasFactory;
    protected $table = 'sqm';
    protected $fillable = [
        'inet',
        'ncli'
    ];
}
