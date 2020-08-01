@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create</h1>
                <form action="/admin/gpus/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input class="form-control" type="text" name="Name" id="Name">
                    </div>
                    <div class="form-group">
                        <label for="Dedicated">Dedicated</label>
                        <input class="form-control" type="text" name="Dedicated" id="Dedicated">
                    </div>
                    <div class="form-group">
                        <label for="Manufacturer">Manufacturer</label>
                        <input class="form-control" type="text" name="Manufacturer" id="Manufacturer">
                    </div>
                    <div class="form-group">
                        <label for="Release_Date">Release date</label>
                        <input class="form-control" type="text" name="Release_Date" id="Release_Date">
                    </div>
                    <a href="/admin/gpus/" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Cancel</a>
                    <button type="submit" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Create</>
                    </form>
            </div>
        </div>
    </div>
@endsection