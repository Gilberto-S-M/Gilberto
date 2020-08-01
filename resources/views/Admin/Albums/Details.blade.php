@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $album->Album}}</b></h4>
                        <p class="card-text">{{ $album->Artist }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Genre: </b> {{ $album->Genre }}</li>
                        <li class="list-group-item"><b>Year: </b> {{ $album->Year }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/albums/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/albums/edit/{{ $album->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/albums/delete/{{ $album->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
