
@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

    <h1 class="text-center">Agregar Parqueos</h1>
    <hr>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container mb-5" >
        <form action="{{ route('parkings.store') }}" method="POST">
            @csrf

            <div class="row">
                <body>

                </body>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre del parqueo:</strong>
                        <input type="text" name="parking_name" class="form-control" placeholder="Introduzca el nombre del parqueo">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Direccion del parqueo:</strong>
                        <textarea class="form-control"  name="parking_address" placeholder="Introduzca la direccion del parqueo"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Total de espacios:</strong>
                        <input type="text" name="total_spaces" class="form-control" placeholder="Introduzca el espacio del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Hora de apertura:</strong>
                        <input type="text" name="open_hour" class="form-control" placeholder="Introduzca la hora que de apertura del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Hora de cierre:</strong>
                        <input type="text" name="close_hour" class="form-control" placeholder="Introduzca la hora que de cierre del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Latitud del parqueo:</strong>
                        <input type="text" name="latitude" class="form-control" placeholder="Introduzca la latitud del parqueo"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Longitud del parqueo:</strong>
                        <input type="text" name="longitud" class="form-control" placeholder="Introduzca la longitud del parqueo"></input>
                    </div>
                </div>


                <div class="form-group" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="id_zone_fk" name="id_zone_fk" required>
                    <span class="bar"></span>
                    <label>Zona</label>
                </div>

                <!--div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="id_price_list_fk" name="id_price_list_fk" required>
                    <span class="bar"></span>
                    <label>Tarifario del parqueo</label>
                </div-->
                <div class="form-group">
                    <label class="col-sm-2 control-label text-right">Usuario</label>
                    <div class="col-sm-10">
                        <div class="fa-align-left">
                            <select class="form-control" name="id_roles_users_fk">


                            </select>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary mb-5">Enviar</button>
                </div>
            </div>

        </form>
    </div>
            </div>
        </div>
    </div>
@endsection
