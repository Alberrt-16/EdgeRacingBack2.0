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
        'description',
    ];

    public function drivers()
    {
        return $this->belongsToMany(Driver::class);
    }
    public function competitions()
    {
        return $this->belongsToMany(Competition::class);
    }
}
