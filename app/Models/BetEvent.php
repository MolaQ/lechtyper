<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetEvent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'hashtag',
        'datetime',
        'homescore',
        'awayscore',
    ];
}
