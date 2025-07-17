<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Island extends Model
{
    use HasFactory;

    protected $primaryKey = 'islandID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'islands';
    public $timestamps = false;

    protected $fillable = [
        'islandID',
        'islandName',
        'regionID', // Foreign key (no relationship)
    ];
}
