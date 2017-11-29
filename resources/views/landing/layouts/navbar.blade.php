<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('gfx/landing/logo.png')}}" class="nav-logo" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav left-align">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="fa fa-map-marker" aria-hidden="true" style="margin-right:.2rem"></i>
                  Vancouver
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">DownTown</a>

                </div>
            </li>
        </ul>
    </div>


    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#howitworks">How it Works?</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#benefits">Why be a Member?</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#restaurants">Restaurants</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#when-to-use">When to Use</a>
            </li>

        </ul>

        <button class="btn btn-outline-secondary right-align" id="login" type="button">Login</button>
       <!--Searchbar-->
        {{--<form class="form-inline my-2 my-lg-0">--}}
            {{--<input class="form-control mr-sm-2" type="text" placeholder="Search">--}}
            {{--<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>--}}
        {{--</form>--}}
    </div>
</nav>