<header>
<!--	style="overflow: hidden;position: fixed;top:0px;width: 100%;" Nav Not Scroll-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-brand">
            <a class="navbar-brand" href="{{route('profile')}}">
                <div class="form-control">
                    <img src="@yield('user_profile')" width="50" height="50" alt="">
                    <label>@yield('user_fullname')</label>
                </div>
            </a></div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('tournament')}}">Tournament</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
						
</header>










