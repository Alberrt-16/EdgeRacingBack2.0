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
        'vehicle_number',
        'profile_image',
        'active',
        'team_id',
        'competition_id'
    ];


    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function rankings()
    {
        return $this->hasMany(Ranking::class);
    }

}
