<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    use HasFactory;

    protected $primaryKey = 'timeID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'times';
    public $timestamps = false;

    protected $fillable = [
        'timeID',
        'time',
        'dayType',
        'monthRange',
    ];
}
