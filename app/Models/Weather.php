<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    use HasFactory;

    protected $primaryKey = 'weatherID';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $table = 'weathers';
    public $timestamps = false;

    protected $fillable = [
        'weatherID',
        'weatherName',
    ];
}
