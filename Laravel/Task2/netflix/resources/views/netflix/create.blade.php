@extends('netflix.data.layouts.app')
@section('header')
@endsection
@section('nav')
    <form method="POST" action="{{route('home.store')}}">
        @csrf
        <input type="text" name="movie_name" placeholder="Add Name" required>
        <input type="text" name="movie_description" placeholder="Add Description" required>
        <input type="text" name="movie_gener" placeholder="Add Genre" required>
        <input type="text" name="image_url" placeholder="Add img" required>
        <button type="submit">Create</button>
    </form>



    @endsection
    </body>
