

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a style="width:200px" class="navbar-brand" href="{{route('home')}}"><i class="fa fa-flask" aria-hidden="true"></i>@yield("title")</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::check())
                <li class="nav-item {{ Request::is('marketing') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('marketing.index')}}">Freud</a>
                </li>
                <li class="nav-item {{ Request::is('user/profile') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('user.profile')}}">User Profile</a>
                </li>
                <li class="nav-item {{ Request::is('user/logout') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('user.logout')}}">Log Out</a>
                </li>
            @else
                <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('login')}}">Sign In</a>
                </li>
                <li class="nav-item {{ Request::is('user/signup') ? 'active' : '' }}">
                    <a class="nav-link" href="{{route('user.signup')}}">Sign Up</a>
                </li>
            @endif


        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>