<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Creature extends Model
{
    use HasFactory, Notifiable, HasUuids;

    protected $primaryKey = 'creatureID';
    public $incrementing = false; // UUID
    protected $keyType = 'string';
    protected $table = 'creatures';
    public $timestamps = false;

    protected $fillable = [
        'creatureID',
        'creatureName',
        'creatureValue',
        'rarityID', // Foreign key (no relationship)
    ];
}
