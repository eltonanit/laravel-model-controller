@extends('layouts.guest')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">BENVENUTO</h1>
        </div>

        <a href="{{ route('movies')}}">Lista Movies</a>
       
    </div>
</div>
@endsection
