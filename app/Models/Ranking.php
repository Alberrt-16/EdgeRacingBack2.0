<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $fillable = [
        'race_id',
        'team_id',
        'position',
        'points',
        'fastLap',
        'did_not_finish',
        'notes',
    ];

    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function drivers()
    {
        return $this->belongsToMany(Driver::class)
            ->withPivot('race_id')
            ->withTimestamps();
    }
}
