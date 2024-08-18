<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;

class NetflixController extends Controller
{
    public function home(){
        $moviesFromDB = movie::all();

        return view('netflix.index', ['movies' => $moviesFromDB]);
    }
    public function movies(){
        return view('netflix.data.pages.movies');

    }
    public function post(){
        $movie = new movie;
        $movie->movie_name = request('movie_name');
        $movie->movie_description = request('movie_description');
        $movie->movie_gener = request('movie_gener');
        $movie->image_ur = request('image_ur');
        $movie->save();
    }

}
