@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <a class="text-right" href="/admin/movies/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Year</th>
                        <th scope="col">Genres</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($movies as $movie)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $movie->Title }}</td>
                        <td>{{ $movie->Year }}</td>
                        <td>{{ $movie->Genres }}</td>
                        <td>
                            <a href="/admin/movies/{{ $movie->_id }}">Details</a> |
                            <a href="/admin/movies/edit/{{ $movie->_id }}">Edit</a> |
                            <a href="/admin/movies/delete/{{ $movie->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection