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

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }
}
