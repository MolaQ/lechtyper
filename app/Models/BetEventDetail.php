<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BetEventDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'betevent_id',
        'footballer_id',
        'time',
        'goals',
        'assists',
        'yellowcards',
        'redcards',
    ];
    public function betevent()
    {
        return $this->belongsTo(BetEvent::class);
    }
    public function footballer()
    {
        return $this->belongsTo(Footballer::class);
    }
}
