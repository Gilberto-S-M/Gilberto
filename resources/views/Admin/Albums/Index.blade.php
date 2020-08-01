@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Albums</h1>
                <a class="text-right" href="/admin/albums/create">Create New</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Album</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Year</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($albums as $album)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $album->Album }}</td>
                        <td>{{ $album->Artist }}</td>
                        <td>{{ $album->Genre }}</td>
                        <td>{{ $album->Year }}</td>
                        <td>
                            <a href="/admin/albums/{{ $album->_id }}">Details</a> |
                            <a href="/admin/albums/edit/{{ $album->_id }}">Edit</a> |
                            <a href="/admin/albums/delete/{{ $album->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection