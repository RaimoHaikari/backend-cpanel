<?php

use Illuminate\Support\Facades\Route;
use App\Models\Critic;
use App\Models\DistinctGenre;
use App\Models\Movie;
use Illuminate\Support\Carbon;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function(){

    $movie = Movie::where('googleID', 1)->get();
    //$reviews = Movie::find(1)->reviews;

    //$movie = Movie::find(1);
    //$reviews = Movie::where('googleID', 1)->get()->first()->reviews->count();
    //dd($reviews);

    //$mytime = Carbon::now();
    //return $mytime->toDateTimeString();
    return $movie;

});
