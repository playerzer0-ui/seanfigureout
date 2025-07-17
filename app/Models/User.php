<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable, HasUuids;

    protected $primaryKey = 'userID';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = [
        'userID',
        'username',
        'email',
        'password',
    ];
}
