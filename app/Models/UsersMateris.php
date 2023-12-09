<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsersMateris extends Model
{
    protected $table = 'users_materis';

    protected $fillable = [
        'status'
    ];
}