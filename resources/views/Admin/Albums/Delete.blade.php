@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/albums/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" Album="albumid" id="albumid" value="{{ $album->_id }}">
                <div class="form-group">
                        <label for="Album">Album</label>
                        <input class="form-control" type="text" Album="Album" id="Album" value="{{ $album->Album }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Artist">Artist</label>
                        <input class="form-control" type="int" Album="Artist" id="Artist" value="{{ $album->Artist }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="int" Album="Genre" id="Genre" value="{{ $album->Genre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input class="form-control" type="int" Album="Year" id="Year" value="{{ $album->Year }}" disabled>
                    </div>
                    <a href="/admin/albums/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection