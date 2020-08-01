@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $movie->Title}}</b></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Year: </b> {{ $movie->Year }}</li>
                        <li class="list-group-item"><b>Genres: </b> {{ $movie->Genres }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/movies/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/movies/edit/{{ $movie->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/movies/delete/{{ $movie->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
