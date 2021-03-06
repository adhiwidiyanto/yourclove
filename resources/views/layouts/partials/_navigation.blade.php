<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <form action="/search" method="get" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" name="q" value="{{ Request::get('q') }}" placeholder="Search" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-md">Search</button>
                </form>

                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        <li><a href="#">powered by <img src="{{ asset('img/Algolia_logo_bg-white.jpg') }}" alt="Algolia logo" class="logo"> </a></li>
                    @else
                        <li><a href="{{ url('/upload') }}">Upload</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href=" {{ url('/videos/') }} ">Your Videos</a>
                                    <a href=" {{ url('/channel/' . $channel->slug) }} ">Your Channel</a>
                                    <a href=" {{ url('/channel/' . $channel->slug) . '/edit' }} ">Channel settings</a>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>



                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">powered by <img src="{{ asset('img/Algolia_logo_bg-white.jpg') }}" alt="Algolia logo" class="logo"> </a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
