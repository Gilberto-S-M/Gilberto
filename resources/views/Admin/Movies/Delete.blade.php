@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/movies/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="movieid" id="movieid" value="{{ $movie->_id }}">
                <div class="form-group">
                        <label for="Title">Title</label>
                        <input class="form-control" type="text" name="Title" id="Title" value="{{ $movie->Title }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input class="form-control" type="text" name="Year" id="Year" value="{{ $movie->Year }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Genres">Genres</label>
                        <input class="form-control" type="text" name="Genres" id="Genres" value="{{ $movie->Genres }}" disabled>
                    </div>
                    <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection