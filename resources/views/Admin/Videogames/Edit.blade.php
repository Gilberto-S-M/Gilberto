@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit</h1>
                <form action="/admin/videogames/edit" method= "POST">
                @csrf
                <input type="hidden" name="videogameid" id="videogameid" value="{{ $videogame->_id }}">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" id="Name" value="{{ $videogame->Name }}">
                    </div>
                    <div class="form-group">
                        <label for="Platform">Platform</label>
                        <input class="form-control" type="text" name="Platform" id="Platform" value="{{ $videogame->Platform }}">
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="text" name="Genre" id="Genre" value="{{ $videogame->Genre }}">
                    </div>
                <a href="/admin/videogames/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                <button type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection