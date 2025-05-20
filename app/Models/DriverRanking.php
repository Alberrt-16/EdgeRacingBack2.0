<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverRanking extends Model
{
    protected $fillable = [
        'driver_id',
        'competition_id',
        'total_points',
    ];


}
