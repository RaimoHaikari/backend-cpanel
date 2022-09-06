<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\DistinctGenre;

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

    //$movie = Movie::where('googleID', 1)->reviews;
    //$reviews = Movie::find(1)->reviews;

    //$movie = Movie::find(1);
    //$reviews = Movie::where('googleID', 1)->get()->first()->reviews->count();
    //dd($reviews);

    $distinctGenres = DistinctGenre::all();

    dd($distinctGenres);

});
