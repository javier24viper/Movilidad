<nav class="navbar navbar-inverse sub-navbar navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subenlaces">
                <span class="sr-only">Interruptor de Navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/home') }}">
                <!-- { config('app.name', 'Laravel') }} -->
                <div class="nav navbar-nav navbar-right">
                    <img src="{{asset('storage/images/Instituto_35.png')}}" width="90" height="45">
                </div>
            </a>
            </div>
            <div class="collapse navbar-collapse" id="subenlaces">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Solicitudes<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('Solicitud')}}">Solicitud Externa</a></li>
                                <li><a href="{{ route('Interna')}}">Solicitud Interna</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('Respuesta')}}">Respuesta a su solicitud</a></li>
                            <!-- <li><a href="#">Algo más aquí</a></li>
                                <li><a href="#">Enlace separado</a></li>-->
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown">
                        <!--  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                
                            </a>-->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style='text-decoration:none;color:Grey;' href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <!--{ __('Logout') }}-->
                                    &nbsp;Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
    </div>
</nav>
<br>
<br>
<br>    
<br>
<br>
