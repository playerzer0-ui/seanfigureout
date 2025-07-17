<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $primaryKey = 'regionID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'regions';
    public $timestamps = false;

    protected $fillable = [
        'regionID',
        'regionName',
    ];
}
