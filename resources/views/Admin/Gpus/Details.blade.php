@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $gpu->Name}}</b></h4>
                        <p class="card-text"><b>Manufacturer: </b> {{ $gpu->Manufacturer }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Dedicated: </b> {{ $gpu->Dedicated }}</li>
                        <li class="list-group-item"><b>Architecture: </b> {{ $gpu->Architecture }}</li>
                        <li class="list-group-item"><b>Release date: </b> {{ $gpu->Release_Date }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/gpus/" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                        <a href="/admin/gpus/edit/{{ $gpu->_id }}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Edit</a>
                        <a href="/admin/gpus/delete/{{ $gpu->_id }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection