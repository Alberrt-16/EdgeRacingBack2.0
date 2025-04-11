<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'competition_team');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'competition_race');
    }
}
