<?php

namespace App\GraphQL\Queries;

use App\Models\Movie;
use App\Exceptions\CustomException;

class Movies
{

    public function numbOfReviews($rootValue, array $args) {

        $reviews = Movie::where('googleID', $rootValue->googleID)
            ->get()
            ->first()
            ->reviews
            ->count();

        /*
        throw new CustomException(
            'This is the error message',
            $rootValue->googleID
        );
        */

        return $reviews;
    }

}
