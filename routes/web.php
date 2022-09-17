<?php

use Illuminate\Support\Facades\Route;
use App\Models\Critic;
use App\Models\StarsOfTheGenre;
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

    $critic = Critic::where('criticID', 'nikoIkonen')->get();
    //$starsOfTheGenre = StarsOfTheGenre::all();

    $districGenres = DistinctGenre::all();
    dd($districGenres);

    return $critic;

});
