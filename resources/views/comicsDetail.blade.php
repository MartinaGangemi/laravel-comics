@extends('layouts.app')

@section('content')
<div class="row ">

        <div class="col-2 comics-card">
                <div class="box-img">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </div> 
                <div class="title">{{ $comic['series'] }}</div>
        </div>
            
</div>
@endsection