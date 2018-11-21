@extends('layouts.layout')
@section('content')
    <div id="content">
        <!--/siempre aniadir para mapras-->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAKpOvOIRIGs6h9rZQHhJp-piWPx4nJ-60&sensor=TRUE_OR_FALSE">
        </script>
        <script type="text/javascript">var centreGot = false;</script>

    {{--{!!$map['js']!!}--}}
    <!--//-**************-->
        <div class="panel">



            <div class="panel-body">

                <h1 class="text-center">Editar  Parqueos</h1>
                <hr>
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif

                <div class="container mb-5" >

                        <form action="{{ route('parkings.update',$parking->id_parkings) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">



                             <div class="col-md-6">
                                 <div class="form-group">
                                    <strong>Nombre del parqueo:</strong>
                                    <input type="text" name="parking_name" value="{{ $parking->parking_name }}" class="form-control" placeholder="Introduzca el nombre del parqueo">
                                 </div>

                             </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Direccion del parqueo:</strong>
                                    <textarea class="form-control"  name="parking_address"  placeholder="Introduzca la direccion del parqueo">{{ $parking->parking_address}}</textarea>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Total de espacios:</strong>
                                    <input type="text" name="total_spaces" value="{{ $parking->total_spaces }}" class="form-control" placeholder="Introduzca el espacio del parqueo"></input>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Hora de apertura:</strong>
                                    <input type="text" name="open_hour"  value="{{ $parking->open_hour }}" class="form-control" placeholder="Introduzca la hora que de apertura del parqueo"></input>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Hora de cierre:</strong>
                                    <input type="text" name="close_hour" value="{{ $parking->close_hour }}" class="form-control" placeholder="Introduzca la hora que de cierre del parqueo"></input>
                                </div>
                            </div>
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<strong>Latitud del parqueo:</strong>--}}
                                    {{--<input type="text" name="latitude" value="{{ $parking->latitude }}" class="form-control" placeholder="Introduzca la latitud del parqueo"></input>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<strong>Longitud del parqueo:</strong>--}}
                                    {{--<input type="text" name="longitud" value="{{ $parking->longitud }}" class="form-control" placeholder="Introduzca la longitud del parqueo"></input>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            <div class="col-md-6 form-group form-animate-text" style="margin-top:10px !important;">
                                <div class="col-sm-5 control-label text-right">
                                    <label class="control-label text-right">Tarifario del parqueo/mes</label>
                                </div>
                                <div class="col-sm-7 control-label text-left">

                                    <select class="form-control" name="id_price_list_fk">
                                        @foreach($price_lists as $Price_list)
                                            <option value="{{ $Price_list['id_price_list'] }}">{{ $Price_list['price'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="col-md-6 form-group form-animate-text" style="margin-top:10px !important;">
                                <div class="col-sm-5 control-label text-right">
                                    <label class="control-label text-right">Zona de ubicacion del parqueo</label>
                                </div>
                                <div class="col-sm-7 control-label text-left">

                                    <select class="form-control" name="id_zones_fk">
                                        @foreach($zones as $zone)
                                            <option value="{{ $zone['id_zones'] }}">{{ $zone['zone'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>






                            <!--div class="form-group" style="margin-top:40px !important;">
                                <input type="text" class="form-text" id="id_zone_fk" name="id_zone_fk" required>
                                <span class="bar"></span>
                                <label>Zona</label>
                            </div>

                            <!--div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text" id="id_price_list_fk" name="id_price_list_fk" required>
                                <span class="bar"></span>
                                <label>Tarifario del parqueo</label>
                            </div-->
                            <!--div class="form-group">
                                <label class="col-sm-2 control-label text-right">Usuario</label>
                                <div class="col-sm-10">
                                    <div class="fa-align-left">
                                        <select class="form-control" name="id_roles_users_fk">

                                        </select>
                                    </div>
                                </div>
                            </div-->


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
