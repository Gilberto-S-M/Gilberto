@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/movies/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="Title">Title</label>
                        <input class="form-control" type="text" name="Title" id="Title">
                    </div>
                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input class="form-control" type="text" name="Year" id="Year">
                    </div>
                    <div class="form-group">
                        <label for="Genres">Genres</label>
                        <input class="form-control" type="text" name="Genres" id="Genres">
                    </div>
                    <a href="/admin/movies/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection