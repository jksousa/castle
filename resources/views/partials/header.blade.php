<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('testcase.index')}}"><i class="fa fa-flask" aria-hidden="true"></i>@yield("title")</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('testcase.index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.profile')}}">User Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.logout')}}">Log Out</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.signin')}}">Sign In</a>
                </li>
                <li class="nav-item">
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