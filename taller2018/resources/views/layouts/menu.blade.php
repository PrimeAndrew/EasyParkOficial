<!-- start:Left Menu -->
<div id="left-menu">
    <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
                <h1 class="animated fadeInLeft">21:00</h1>
                <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>
            <li class="active ripple">
                <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Cliente
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    {{--<li><a href="/registerCliente">Nuevo Cliente</a></li>--}}
                    <li><a href="/cars">Nuevo Vehiculo</a></li>
                </ul>
            </li>


            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span>Nueva Reserva<span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="/reservations">Busqueda Parqueo</a></li>

                </ul>
            </li>
            <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-table"></span> Historial Reservas<span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                    <li><a href="/bookings">Listar Reservas</a></li>

                    <li class="nav nav-list sub-tree">
                        <!--li><a href=" ">Check In</a></li-->
                        <!--li><a href=" ">Check Out</a></li-->
                        <li><a href="/deleterev">Cancelar Reserva</a></li>
                    </li>
                </ul>
            </li>
            <li class="ripple">
                <a class="tree-toggle nav-header">
                    <span class="fas fa-car"></span> Parqueos
                    <span class="fa-angle-right fa right-arrow text-right"></span>
                </a>
                <ul class="nav nav-list tree">
                    <li><a href="/parkings">Listado Parqueo</a></li>
                    <li><a href="/parkings/create">Nuevo Parqueo</a></li>

                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- end: Left Menu -->
