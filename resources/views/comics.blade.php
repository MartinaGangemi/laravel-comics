@extends('layouts.app')

@section('content')
    <div class="comics-container">
        <div class="container pt-5">
            <button class="current"> current series</button>
            <!-- sezione fumetti -->
            <div class="row ">
                @foreach ( $comics_list as $index => $comic)
               
                <div class="col-2 comics-card">
                <a href="{{route('comicsDetail',$index)}}">
                    <div class="box-img">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div> 
                    <div class="title">{{ $comic['series'] }}</div>
                    </a>
                </div>
                
                @endforeach
            </div>
        <div class="btn-center"><button class="load">load more</button></div>
    </div>


    <div class="bg-blue mt-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col" >
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}"> 
                    Digital comics
                </div>
                <div class="col" >
                    <img src="{{asset('img/buy-comics-merchandise.png')}}"> 
                    Dc Merchandise
                </div>
                <div class="col" >
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}"> 
                    Subscription
                </div>
                <div class="col" >
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}"> 
                    Comics shop location
                </div>
                <div class="col" >
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}"> 
                    dc power visa
                </div>
            </div>
        </div>
    </div>


@endsection