<nav id="navbar">
    <div class="container">
        <div class="navbar-header">
            <a href="{{ url('/') }}">
                <span class="logo"><img src="http://placehold.it/80x50" alt="logo"></span>
                <span class="titre">ESPACE PRESCRIPTION IMMOBILIERE INTERFACE ADMINISTRATION</span>
            </a>
            <div class="navbar-hamb">|||</div>
        </div>
        <!-- Navigation -->
        <div class="navbar-nav navigation">
            <ul>
                <li><a href="#">Gestion des courtiers</a></li> 
                <li><a href="#">Gestion des utilisateurs</a></li> 
                <li><a href="#">Suivi des dossiers</a></li> 
                <li><a href="#">Stats</a></li> 
            </ul>
        </div>
        <!-- Auth -->
        <div class="navbar-nav authentication">
            <ul>
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
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
                @endif
            </ul>
        </div>
    </div>
</nav>