<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'detail',
        'date',
        'price',
        'idtype',
        'iduser',
        'idstate',
    ];

}
