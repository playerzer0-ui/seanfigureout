<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Boat extends Model
{
    use HasFactory;

    protected $primaryKey = 'boatID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'boats';
    public $timestamps = false;

    protected $fillable = [
        'boatID',
        'boatName',
    ];
}
