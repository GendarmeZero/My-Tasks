@extends('netflix.data.layouts.app')
@section('header')
@endsection
@section('nav')

<!-- Hero Section -->
<div class="hero">
    <div class="hero-content">
        <h1>Unlimited movies, TV shows, and more.</h1>
        <p>Watch anywhere. Cancel anytime.</p>
        <button><a href="{{route('home.create')}}">Get Started</a></button>
    </div>
</div>





<div class="movie-grid">
    @foreach($movies as $movie)
    <div class="movie-card">
            <div class="movie-card-image">

                <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
            </div>
            <div class="movie-card-content">
                <h3>{{ $movie->movie_name }}</h3>
                <p>{{ $movie->movie_description }}</p>
                <span class="genre">{{ $movie->movie_gener }}</span>
                <button class="genre" ><a href="{{route('home.show' , $movie->id)}}"> show </a>   </button>
            </div>
        </div>

    @endforeach
</div>






<!-- Sections -->
<div class="sections">
    <div class="section-title">Popular on Netflix</div>
    <div class="row">
        <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
        <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
        <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
        <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
        <img src="{{ asset($movie->image_url) }}" alt="{{ $movie->movie_name }}">
    </div>
</div>
@endsection
</body>
</html>
