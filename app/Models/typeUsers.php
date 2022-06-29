<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typeUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
}
