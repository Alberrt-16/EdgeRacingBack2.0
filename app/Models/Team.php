<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'principal',
        'logo',
        'points',
        'description',
        'competition_id'
    ];

    public function drivers()   
{
    return $this->belongsToMany(Driver::class);
}
    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }
    public function rankings()
    {
        return $this->hasMany(Ranking::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
