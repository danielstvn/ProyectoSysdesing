<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  
    <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register') }}">
                        Registro
                    </a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{url('home')}}">Inicio&nbsp;<i class="fa fa-home"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/productos')}}">Productos&nbsp;<i class="fa fa-box"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('vender')}}">Vender&nbsp;<i class="fa fa-cart-plus"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('ventas')}}">Ventas&nbsp;<i class="fa fa-list"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('usuarios')}}">Usuarios&nbsp;<i class="fa fa-users"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('clientes')}}">Clientes&nbsp;<i class="fa fa-users"></i></a>
                </li>
            @endguest
        </ul>
        <ul class="navbar-nav ml-auto">
            @auth
                <li class="nav-item">
                    <a href="{{route("logout")}}" class="nav-link">
                        Salir ({{ Auth::user()->name }})
                    </a>
                </li>
            @endauth
            
        </ul>
    </div>
</nav>