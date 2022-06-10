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
                <img src="{{asset('img/dc-logo.png')}}" alt=""> 
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
                            <a  href="#">Movies</a>
                        </li>
                        <li>
                            <a  href="#">Tv</a>
                        </li>
                        <li>
                            <a  href="#">Games</a>
                        </li>
                        <li>
                            <a  href="#">Collectibles</a>
                        </li>
                        <li>
                            <a  href="#">Videos</a>
                        </li>
                        <li>
                            <a  href="#">Fans</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                    </ul>
                </nav>
                <input type="text" placeholder="search">
            </div>
        </div>  
    </div>
</header>