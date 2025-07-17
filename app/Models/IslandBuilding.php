<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IslandBuilding extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'islandBuildings';
    public $timestamps = false;

    protected $fillable = [
        'islandID',
        'buildingID',
    ];
}
