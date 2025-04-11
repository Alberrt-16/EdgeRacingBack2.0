<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'birth_country',
        'car_number',
        'profile_image',
        'active',
        'team_id',
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function rankings()
    {
        return $this->belongsToMany(Ranking::class)
            ->withPivot('race_id')
            ->withTimestamps();
    }

}
