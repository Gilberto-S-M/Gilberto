@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Videogames</h1>
                <div class="row">
                        @foreach($videogames as $videogame)
                        <div class="card col-md-3">
                            <div class="card-body">
                            <br>
                                <h5 class="card-title">{{ $videogame->Name }}</h5>
                                <p class="card-text">{{ $videogame->Platform }}</p>
                                <a href="/videogames/{{ $videogame->_id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/videogames?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($videogameCount/700); $i++)
                                    <a href="/videogames?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/videogames?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($videogameCount/700) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
                 <br>
            </div>
        </div>
    </div>
@endsection
