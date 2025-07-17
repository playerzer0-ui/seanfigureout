<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rarity extends Model
{
    use HasFactory;

    protected $primaryKey = 'rarityID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'rarities';
    public $timestamps = false;

    protected $fillable = [
        'rarityID',
        'rarityName',
        'rarityValue',
    ];
}
