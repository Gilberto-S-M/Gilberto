@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/videogames/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="videogameid" id="videogameid" value="{{ $videogame->_id }}">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" id="Name" value="{{ $videogame->Name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Platform">Platform</label>
                        <input class="form-control" type="text" name="Platform" id="Platform" value="{{ $videogame->Platform }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre Space</label>
                        <input class="form-control" type="text" name="Genre" id="Genre" value="{{ $videogame->Genre }}" disabled>
                    </div>
                    <a href="/admin/videogames/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection