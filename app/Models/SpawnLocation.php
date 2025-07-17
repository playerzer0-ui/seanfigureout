<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpawnLocation extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'spawnLocations';
    public $timestamps = false;

    protected $fillable = [
        'creatureID', // UUID
        'regionID',   // Integer
    ];
}
