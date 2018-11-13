@extends('layouts.layout')
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

                <div class="col-md-6">
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" name="parking_name" class="form-text" id="parking_name" required>
                            <span class="bar"></span>
                            <label>Nombre del parqueo:</label>

                    </div>
                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="parking_address" name="parking_address" required>
                            <span class="bar"></span>
                            <label>Direccion del parqueo</label>
                    </div>

                    <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text" id="total_spaces" name="total_spaces" required>
                            <span class="bar"></span>
                            <label>Introduzca el espacio del parqueo</label>
                    </div>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="open_hour" name="open_hour" required>
                    <span class="bar"></span>
                    <label>Introduzca la hora que de apertura del parqueo</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="close_hour" name="close_hour" required>
                    <span class="bar"></span>
                    <label>Introduzca la hora que de cierre del parqueo</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="latitude" name="latitude" required>
                    <span class="bar"></span>
                    <label>Latitud del parqueo</label>
                </div>
                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" id="longitud" name="longitud" required>
                    <span class="bar"></span>
                    <label>Longitud del parqueo</label>
                </div>
                <!--
                                               <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" id="plate_number" name="plate_number" required>
                                                <span class="bar"></span>
                                                <label>Numero de placa</label>
                                               </div>

                                               <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" id="" name="" required>
                                                <span class="bar"></span>
                                                <label></label>
                                               </div>

                -->

                <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                    <div class="col-sm-5 control-label text-right">
                        <label class="control-label text-right">Zona de ubicacion del parqueo</label>
                    </div>
                    <div class="col-sm-7 control-label text-left">

                        <select class="form-control" name="id_zones_fk">
                            @foreach($zones as $zone)
                                <option value="{{ $zone['id_zones'] }}}">{{ $zone['zone'] }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                    <div class="col-sm-5 control-label text-right">
                        <label class="control-label text-right">Tarifario del parqueo</label>
                    </div>
                    <div class="col-sm-7 control-label text-left">

                        <select class="form-control" name="id_price_list_fk">
                            @foreach($price_lists as $Price_list)
                                <option value="{{ $Price_list['id_price_list'] }}}">{{ $Price_list['price'] }}</option>
                            @endforeach
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
