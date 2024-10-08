@extends('layouts.guest')

@section('content')

     
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('home')}}">HOME</a>
            <h1 class="text-center">Movies</h1>
        </div>
        <div class="col-12">
            <div class="row">
                @foreach ($movies as $movie)
                <div class="card">
                    <div class="card-title">
                        <h4>{{ $movie->title }}</h4>
                    </div>
                    <div class="card-body">
                        <p> {{ $movie->original_title }}, {{ $movie->nationality }},
                             {{ $movie->vote }}, {{ $movie->date }} </p>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </div>
</div>

@endsection