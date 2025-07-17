<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpawnTime extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'spawnTimes';
    public $timestamps = false;

    protected $fillable = [
        'creatureID', // UUID
        'timeID',     // Integer
        'weatherID',  // Integer
    ];
}
