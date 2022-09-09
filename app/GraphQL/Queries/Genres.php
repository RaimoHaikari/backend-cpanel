<?php

namespace App\GraphQL\Queries;

use App\Models\GenreReview;
use App\Exceptions\CustomException;

class Genres
{


    public function numberOfReviews($rootValue, array $args) {

        $nOfreviews = GenreReview::where('genre', $rootValue->genre)
            ->get()
            ->count();

        /*
        throw new CustomException(
            'This is the error message',
            $reviews
        );
        */

        return $nOfreviews;
    }

    public function starsAverage($rootValue, array $args) {

        $avg = GenreReview::where('genre', $rootValue->genre)
            ->get()
            ->avg('stars');

        /*
        throw new CustomException(
            'This is the error message',
            $reviews
        );
        */
    
        

        return $avg;
    }

}
