<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamRanking extends Model
{
    protected $fillable = [
        'team_id',
        'competition_id',
        'total_points',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
