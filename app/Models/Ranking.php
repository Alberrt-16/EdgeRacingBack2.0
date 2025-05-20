<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = [
        'race_id',
        'driver_id',
        'competition_id',
        'position',
        'points',
        'fastLap',
        'did_not_finish',
        'notes',
    ];


}
