@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete</h1>
                <form action="/admin/gpus/delete" method= "POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="gpuid" id="gpuid" value="{{ $gpu->_id }}">
                <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" id="Name" value="{{ $gpu->Name }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Dedicated">Dedicated</label>
                        <input class="form-control" type="text" name="Dedicated" id="Dedicated" value="{{ $gpu->Dedicated }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Manufacturer">Manufacturer</label>
                        <input class="form-control" type="text" name="Manufacturer" id="Manufacturer" value="{{ $gpu->Manufacturer }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="Release_Date">Release_Date</label>
                        <input class="form-control" type="text" name="Release_Date" id="Release_Date" value="{{ $gpu->Release_Date }}" disabled>
                    </div>
                    <a href="/admin/gpus/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection