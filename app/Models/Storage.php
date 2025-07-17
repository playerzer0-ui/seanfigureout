<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;

    protected $primaryKey = ['userID', 'creatureID']; // Composite key
    public $incrementing = false;
    protected $table = 'storages';
    public $timestamps = false;

    protected $fillable = [
        'userID',
        'creatureID',
    ];
}
