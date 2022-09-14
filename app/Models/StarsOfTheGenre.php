<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StarsOfTheGenre extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
        'stars',
        'total'
    ];
}
