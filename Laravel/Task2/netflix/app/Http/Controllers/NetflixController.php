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
    public function show(movie $movies){
        return view('netflix.show', ['movie' => $movies]);
    }
    public function create(){
        return view('netflix.create');
    }
    public function store(){
        $movie_name = request()->movie_name;
        $movie_description = request()->movie_description;
        $movie_gener = request()->movie_gener;
        $image_url = request()->image_url;

        movie::create([
            'movie_name' => $movie_name,
            'movie_description' => $movie_description,
            'movie_gener' => $movie_gener,
            'image_url' => $image_url

        ]);

        return redirect('/home');

    }
    public function destroy($id){

        $movies = movie::findorfail($id);
        $movies->delete();
        return redirect('/home');

    }
    public function update($id) {


        $movie_name = request()->movie_name;
        $movie_description = request()->movie_description;
        $movie_gener = request()->movie_gener;
        $image_url = request()->image_url;

        $moviePost = movie:: find($id);
        $moviePost->update([
            'movie_name' => $movie_name ,
            'movie_description' => $movie_description,
            'movie_gener' => $movie_gener,
            'image_url' => $image_url
        ]);


        return to_route('home.show' , $id);
    }



}
