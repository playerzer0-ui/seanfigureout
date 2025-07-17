<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;

    protected $primaryKey = 'buildingID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'buildings';
    public $timestamps = false;

    protected $fillable = [
        'buildingID',
        'buildingName',
    ];
}
