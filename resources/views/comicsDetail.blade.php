@extends('layouts.app')

@section('content')


<div class="bg-blue ">
        <div class="container position-relative">
                <div class="comics-img position-absolute">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                <div class="text-book px-2">comic book</div>
                <div class="text-gallery px-2">text gallery</div>
                </div> 
        </div>
</div>
<!-- comics description -->
<div class="container my-5">
       <div class="row ">
               <!-- col -->
               <div class="col-8">
                        <h3 class="text-uppercase">{{ $comic['title'] }}</h3>
                        <div class="row bg-primary m-0">
                                <div class="col d-flex justify-content-between ">
                                        U.S. Price {{$comic['price']}}
                                        <div class="text-uppercase">available</div>
                                </div>
                                <div class="col">
                                        Check Avaiability
                                </div>
                                
                        </div>
                        <div class="col-12 m-0">
                                {{$comic['description']}}
                        </div>
               </div>
               <!-- col superman card -->
               <div class="col-4 text-end">
                       <h6 class="text-uppercase ">advertisement</h6>
                       <!-- disattivare ad block -->
                       <img class="rewards"src="{{asset('img/adv.jpg')}}" alt="">
               </div>
               
       </div>
</div>
<div class="bg-light">
        <div class="container">
                <div class="row">
                        <div class="col-6">
                                <h3>Talent</h3>
                                <div class="row">
                                        <div class="col-3">
                                                <h6>Art by:</h6>
                                        </div>
                                        <div class="col-9">
                                                <p>
                                                        @foreach($comic['artists'] as $key => $value)
                                                        <a href="#">{{ $value }}</a>
                                                        @if( $key != count( $comic['artists']) -1 )
                                                        <span>, </span>
                                                        @endif
                                                        @endforeach
                                                </p>
                                        </div>
                                        <div class="col-3">
                                                <h6>Written by:</h6>
                                        </div>
                                        <div class="col-9">
                                                <p>
                                                        @foreach($comic['writers'] as $key => $value)
                                                        <a href="#">{{ $value }}</a>
                                                        @if( $key != count( $comic['artists']) -1 )
                                                        <span>, </span>
                                                        @endif
                                                        @endforeach
                                                </p>
                                        </div>
                                       
                                </div>
                        </div>
                        <div class="col-6">
                                <h3>Specs</h3>
                                <div class="row">
                                        <div class="col-3">
                                                <h6>Series:</h6>
                                        </div>
                                        <div class="col-9">
                                                <p>
                                                        {{$comic['series']}}
                                                </p>
                                        </div>
                                        <div class="col-3">
                                                <h6>U.S. Price:</h6>
                                        </div>
                                        <div class="col-9">
                                                <p>
                                                        {{$comic['price']}}
                                                </p>
                                        </div>
                                        <div class="col-3">
                                                <h6>On sale date:</h6>
                                        </div>
                                        <div class="col-9">
                                                <p>
                                                        {{$comic['sale_date']}}
                                                </p>
                                        </div>
                                </div>
                        </div>

                </div>
        </div>
</div>


@endsection