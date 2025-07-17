<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBoat extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $table = 'userBoats';
    public $timestamps = false;

    protected $fillable = [
        'userID',
        'boatID',
    ];
}
