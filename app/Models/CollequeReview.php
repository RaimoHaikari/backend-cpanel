<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollequeReview extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, int, float>
     */
    protected $fillable = [
        'criticID',
        'googleID',
        'stars',
    ];
}
