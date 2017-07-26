<header>
    <div class="container">
        <span class="bar hide"></span>
        <a href="{{route('home.index')}}" class="logo"><img src="img/logo.png" alt=""></a>
        <nav>
            <div class="nav-control">
                <ul>
                    <li><a href="{{route('home.index')}}">Home</a></li>
                    <li><a href="{{route('video.index')}}">Videos</a></li>
                    <li><a href="contact.html">Stream</a></li>
                    <li><a href="contact.html">Articles</a></li>
                </ul>
            </div>
        </nav>
        <div class="nav-right">
            @if (Auth::guest())
            <nav>
                <div class="nav-control">
                    <ul>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            </nav>
            @else
            <div class="nav-profile dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-1/p200x200/13320005_1237034039661118_2889321306439724128_n.jpg?oh=76fd1617fedae7ded364a4eb8f8dce3c&oe=598FB657" alt=""> <span>Adwim</span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-heart"></i> Likes <span class="label label-info">32</span></a></li>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Games</a></li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-power-off"></i> Sign Out</a></li>
                </ul>
            </div>
            <div class="nav-dropdown dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="label label-danger">3</span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header"><i class="fa fa-bell"></i> You have 5 new games</li>
                    <li><a href="#">Alien Isolation</a></li>
                    <li><a href="#">Witcher 3 <span class="label label-success">XBOX</span></a></li>
                    <li><a href="#">Last of Us</a></li>
                    <li><a href="#">Uncharted 4 <span class="label label-primary">PS4</span></a></li>
                    <li><a href="#">GTA 5 <span class="label label-warning">PC</span></a></li>
                    <li class="dropdown-footer"><a href="#">View all games</a></li>
                </ul>
            </div>
            @endif
            <a href="#" data-toggle="modal-search"><i class="fa fa-search"></i></a>
        </div>
    </div>
</header>
<!-- /header -->