<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Movie extends Model
{
    use HasFactory;

    /*
     *
     */
    protected $fillable = [
        'googleID', 'nimi', 'wiki', 'imdb', 'kavi', 'img', 'paiva','kuukausi','vuosi'
    ];

    public function genres(): HasMany
    {
        return $this->hasMany(Genre::class,'googleID', 'googleID');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class,'googleID', 'googleID');
    }

}
