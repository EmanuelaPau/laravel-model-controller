@extends('layouts.app')
@section('title','Homepage')
@section('main-section')
    <h1>
        Homepage Movies
    </h1>
    {{-- @dd($movies) --}}

    @foreach ($movies as $movie )
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$movie['title']}}</h5>
                <p class="card-text">{{$movie['original_title']}}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nationality: <strong>{{$movie['nationality']}}</strong></li>
                <li class="list-group-item">Date: <strong>{{$movie['date']}}</strong> </li>
                <li class="list-group-item">Vote: <strong>{{$movie['vote']}}</strong> </li>
            </ul>
        </div>
    @endforeach
@endsection