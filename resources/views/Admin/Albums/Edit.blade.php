@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/albums/edit" method= "POST">
                @csrf
                <input type="hidden" name="albumid" id="albumid" value="{{ $album->_id }}">
                <div class="form-group">
                        <label for="Album">Album</label>
                        <input class="form-control" type="text" name="Album" id="Album" value="{{ $album->Album }}">
                    </div>
                    <div class="form-group">
                        <label for="Artist">Artist</label>
                        <input class="form-control" type="int" name="Artist" id="Artist" value="{{ $album->Artist }}">
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="int" name="Genre" id="Genre" value="{{ $album->Genre }}">
                    </div>
                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input class="form-control" type="int" name="Year" id="Year" value="{{ $album->Year }}">
                    </div>
                <a href="/admin/albums/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection