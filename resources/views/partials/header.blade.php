<header class="m-0">
    <div class="visa">
        <div class="container">
            <ul>
                <li><a href="#">dc power visa</a></li>
                <li><a href="#">dc power visa</a></li>
            </ul>
        </div>
    </div>
    <div class="mt-0 container main_header">
        <div class="row g-0 align-items-center">
            <!-- logo img -->
            <div class="col-2">
                <a href="{{ route('home')}}">
                    <img src="{{asset('img/dc-logo.png')}}" alt=""> 
                </a>
            </div>
            <!-- nav -->
            <div class="col-10 d-flex justify-content-end">
                <nav>
                    <ul>
                        <li>
                            <a  class ="{{Route::currentRouteName()==='characters'?'active':''}}" href="{{ route('characters')}}">Characters</a>
                        </li>
                        <li>
                            <a  class ="{{Route::currentRouteName()==='comics'?'active':''}}" href="{{ route('comics')}}">Comics</a>
                        </li>
                        <li>
                            <a class ="{{Route::currentRouteName()==='movies'?'active':''}}"href="{{ route('movies')}}">Movies</a>
                        </li>
                        <li>
                            <a  class ="{{Route::currentRouteName()==='tv'?'active':''}}"href="{{ route('tv')}}">Tv</a>
                        </li>
                        <li>
                            <a  class ="{{Route::currentRouteName()==='games'?'active':''}}" href="{{ route('games')}}">Games</a>
                        </li>
                        <li>
                            <a  class ="{{Route::currentRouteName()==='collectibles'?'active':''}}" href="{{ route('collectibles')}}">Collectibles</a>
                        </li>
                        <li>
                            <a  class ="{{Route::currentRouteName()==='videos'?'active':''}}" href="{{ route('videos')}}">Videos</a>
                        </li>
                        <li>
                            <a class ="{{Route::currentRouteName()==='fans'?'active':''}}" href="{{ route('fans')}}">Fans</a>
                        </li>
                        <li>
                            <a class ="{{Route::currentRouteName()==='news'?'active':''}}" href="{{ route('news')}}">News</a>
                        </li>
                        <li>
                            <a class ="{{Route::currentRouteName()==='shop'?'active':''}}" href="{{ route('shop')}}">Shop</a>
                        </li>
                    </ul>
                </nav>
                <input type="text" placeholder="search">
            </div>
        </div>  
    </div>
</header>