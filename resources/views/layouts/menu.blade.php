<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://localhost:8000/" class="brand-logo">
        WORKFLOW
    </a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/home">home</a></li>
            <li>

            </li>
            @auth
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>
            <li>
                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endauth
        </ul>
        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

                        {{-- @if(!Auth::check())
                        <li><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                        <li><a class="nav-link" href="{{ url('/register') }}">Register</a></li> --}}
                        {{-- @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif --}}