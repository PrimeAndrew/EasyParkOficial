<!-- start: Header -->
<nav class="navbar navbar-default header navbar-fixed-top">
    <div class="col-md-12 nav-wrapper">
        <div class="navbar-header" style="width:100%;">
            <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
            </div>
            <!--Para ir a la pagina inicial -->
             <a href="/home" class="navbar-brand">
                 <b>Easy Park</b>
             </a>
             <ul class="nav navbar-nav navbar-right user-nav">
                 <li class="user-name"><span> usuario</span></li>
                 <li class="dropdown avatar-dropdown">
                     <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="nombre_usuario" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                     @if (Route::has('login'))
                         <ul class="dropdown-menu user-dropdown">
                             @auth
                                 <li><a href="{{ url('/home') }}"><span class="fa fa-user"></span>Inicio</a></li>
                                 <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                     <span class="fa fa-power-off "></span>Cerrar Sesion
                                     </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{csrf_field()}}
                                     </form>
                                 </li>

                             @else
                                 <a href="{{ route('login') }}">Login</a>
                                 <a href="{{ route('register') }}">Register</a>
                             @endauth
                         </ul>
                     @endif
                 </li>
             </ul>
         </div>
     </div>
 </nav>
 <!-- end: Header -->
