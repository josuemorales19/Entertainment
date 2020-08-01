@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>TV Shows</h1>
                <div class="row">
                        @foreach($tvshows as $tvshows)
                        <div class="card col-md-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $tvshows->Title }}</h5>
                                <p class="card-text">{{ $tvshows->Plot }}</p>
                                <p class="card-text">{{ $tvshows->Released }}</p>
                                <a href="/tv_shows/{{ $tvshows->_id }}" class="btn btn-primary">View</a>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-md-12 ">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group mx-auto" role="group" aria-label="First group">
                                    @php 
                                        $cpage = request('pg') == 0 ? 1 : request('pg');
                                    @endphp

                                    <a href ="/tv_shows?pg={{ $cpage - 1 }}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                    @for ($i = 1; $i <= ceil($tvshowsCount/12); $i++)
                                    <a href="/tv_shows?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : ''}}">{{$i}}</a>
                                    @endfor
                                    <a href="/tv_shows?pg={{ $cpage + 1}}" class="btn btn-secondary {{$cpage == ceil($tvshowsCount/12) ? 'disabled' : '' }}">&gt</a>
                                </div>
                          </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
