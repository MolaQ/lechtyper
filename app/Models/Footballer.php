<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footballer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'number',
        'position',
        'status',

    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
