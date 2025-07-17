<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $primaryKey = ['userID', 'creatureID']; // Composite key
    public $incrementing = false;
    protected $table = 'journals';
    public $timestamps = false;

    protected $fillable = [
        'userID',
        'creatureID',
        'journalName',
    ];
}
