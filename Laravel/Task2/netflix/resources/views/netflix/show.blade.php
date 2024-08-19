@extends('netflix.data.layouts.app')
@section('header')
@endsection
@section('nav')

    <div class="movie-grid">
        <div class="movie-card">
            <div class="movie-card-image">

                <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
            </div>
            <div class="movie-card-content">
                <h3>{{ $movie->movie_name }}</h3>
                <p>{{ $movie->movie_description }}</p>
                <span class="genre">{{ $movie->movie_gener }}</span>
                <form method="POST" action="{{route('home.destroy' , $movie->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit"   class="btn btn-danger">Delete</button>
                </form>
                <a href="{{route('home.edit' , $movie->id)}}"> <button class="btn btn-danger"> Edit </button></a>

            </div>
        </div>

    </div>



@endsection
