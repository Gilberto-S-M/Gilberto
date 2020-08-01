@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>GPUs</h1>
                <div class="row">
                        @foreach($gpus as $gpu)
                        <div class="card col-md-3">
                            <div class="card-body">
                            <br>
                                <h5 class="card-title">{{ $gpu->Name }}</h5>
                                <p class="card-text">{{ $gpu->Architecture }}</p>
                                <p class="card-text">{{ $gpu->Manufacturer }} Minutes</p>
                                <a href="/gpus/{{ $gpu->_id }}" class="btn btn-primary">View</a>
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

                                    <a href ="/gpus?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($gpuCount/150); $i++)
                                    <a href="/gpus?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/gpus?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($gpuCount/150) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
                 <br>
            </div>
        </div>
    </div>
@endsection
