@extends('layouts.app')

@section('content')
<main>
    <div class="container pt-5">
        <button class="current"> current series</button>
        <!-- sezione fumetti -->
        <div class="row">
        @foreach ( $comics_list as $comic)
            <div class="col-2">
            
            <div class="comics-card"> 
                    <div class="box-img">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div> 
                    <div class="title">{{ $comic['title'] }}</div>
                </div>
            </div>
            @endforeach
            </div>
            <div class="btn-center"><button class="load">load more</button></div>
    
    </div>
</main>

</div>


@endsection