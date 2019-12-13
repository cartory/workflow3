<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="http://localhost:8000" class="brand-logo">WORKFLOW</a>
        <ul class="right hide-on-med-and-down">
            <li>
                <a href="https://github.com/cartory/workflow3.git" target="_blank" >Repositorio</a>
            </li>
        @auth
            <li><a href="{{ url('/home') }}">Home</a></li>
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