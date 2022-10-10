<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersList extends Model
{
    use HasFactory;

    protected $fillable = [
        'nr',
        'season_id',
        'league_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
