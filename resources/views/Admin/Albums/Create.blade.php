@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/albums/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="Album">Album</label>
                        <input class="form-control" type="text" album="Album" id="Album">
                    </div>
                    <div class="form-group">
                        <label for="Artist">Artist</label>
                        <input class="form-control" type="int" album="Artist" id="Artist">
                    </div>
                    <div class="form-group">
                        <label for="Genre">Genre</label>
                        <input class="form-control" type="int" album="Genre" id="Genre">
                    </div>
                    <div class="form-group">
                        <label for="Year">Year</label>
                        <input class="form-control" type="int" album="Year" id="Year">
                    </div>
                    <a href="/admin/albums/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection