@extends('netflix.data.layouts.app')
@section('header')
@endsection
@section('nav')
    <form method="POST" action="{{route('home.edit', $movie->id)}}">
        @csrf
        @method('PUT')
        <input type="text" name="movie_name" value="{{$movie_name->movie_name}}" required>
        <input type="text" name="movie_description" placeholder="Add Description" required>
        <input type="text" name="movie_gener" placeholder="Add Genre" required>
        <input type="text" name="image_url" placeholder="Add img" required>
        <button type="submit">Edit</button>
    </form>


    @endsection
    </body>
