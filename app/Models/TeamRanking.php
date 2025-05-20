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

}
