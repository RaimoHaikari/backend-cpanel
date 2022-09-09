<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/*
        genre: String!
        movies: [Movie]!
        numberOfMovies: Int!,
        numberOfReviews: Int!
        numberOfReviewsCounted: Int!
        starsAverage: Float!
        starsAverageCounted: Float!
*/
class Genre extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'googleID',
        'genre',
    ];

    public function movie(): BelongsTo
    {
        return $this->belongsTo(Movie::class, 'googleID', 'googleID');
    }
}
