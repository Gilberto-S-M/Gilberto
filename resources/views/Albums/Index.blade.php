@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Albums</h1>
                <div class="row">
                        @foreach($albums as $album)
                        <div class="card col-md-3">
                            <div class="card-body">
                            <br>
                                <h5 class="card-title">{{ $album->Album }}</h5>
                                <p class="card-text">{{ $album->Year }}</p>
                                <p class="card-text">{{ $album->Artist }}</p>
                                <a href="/albums/{{ $album->_id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <br>
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/albums?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($albumCount/24); $i++)
                                    <a href="/albums?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/albums?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($albumCount/24) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
