<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date',
        'start_time',
        'laps',
        'description',
        'competition_id',
        'track_id',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class, 'competition_race');
    }

    public function track()
    {
        return $this->belongsTo(Track::class);
    }

    public function ranking()
    {
        return $this->hasOne(Ranking::class);
    }

}
