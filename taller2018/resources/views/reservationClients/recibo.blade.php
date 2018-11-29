@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <div class="col-md-20">
                    <div class="col-md-12 panel">
                        <div class="col-md-12 panel-heading">
                            <h4>Recibo reserva</h4>
                        </div>


                        {{--validaciones--}}
                        @if(count($errors))
                            <div class="alert alert-danger">
                                <b><p>Por favor introduzca los siguientes errores:</p></b>
                                <button type="button" class="close" data-dismiss="alert">
                                    &times;
                                </button>
                                <ul>
                                    @foreach($errors->all() as $errors)
                                        <li>{{$errors}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{--validaciones--}}


                        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">
                                {{--<form class="cmxform" id="signupForm" method="POST" action="{{  route('reservationClients.store') }}" >--}}
                                    {{--@csrf--}}
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="date" class="form-text" id="entry_date" name="entry_date" value="{{ $resClient->entry_date }}">
                                            <span class="bar"></span>
                                            <label>Fecha entrada</label>
                                        </div>


                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="time" class="form-text" id="entry_hour" name="entry_hour" value="{{ $resClient->entry_hour }}">
                                            <span class="bar"></span>
                                            <label>Hora entrada</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" value="{{ $space->space_code }}" >
                                            <input type="hidden" class="form-text" id="id_parking_spaces_fk" name="id_parking_spaces_fk" value="{{ $space->id_parking_spaces }}">
                                            <span class="bar"></span>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" value="{{ $park->parking_name }}"  >
                                            <span class="bar"></span>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="entry_hour" name="entry_hour" value="{{ $resClient->amount }}">
                                            <span class="bar"></span>
                                            <label>Monto</label>
                                        </div>



                                    </div>

                                    <div class="col-md-6">

                                        {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                        {{--<input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[/|0-9]+">--}}
                                        {{--<span class="bar"></span>--}}
                                        {{--<label>Fecha salida</label>--}}
                                        {{--</div>--}}


                                        {{----}}

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="date" class="form-text" id="departure_date" name="departure_date" value="{{ $resClient->departure_date }}">
                                            <span class="bar"></span>
                                            <label>Fecha salida</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="time" class="form-text" id="departure_hour" name="departure_hour"  value="{{ $resClient->departure_hour }}">
                                            <span class="bar"></span>
                                            <label>Hora salida</label>
                                        </div>

                                        {{----}}

                                        {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                        {{--<input type="text" class="form-text" id="" name="" required disabled>--}}
                                        {{--<span class="bar"></span>--}}
                                        {{--<label>Placa</label>--}}
                                        {{--</div>--}}

                                        {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                            {{--<input type="text" class="form-text" id="entry_hour" name="entry_hour" value="{{ $carsP->plate_number }}">--}}
                                            {{--<span class="bar"></span>--}}
                                            {{--<label>Automovil</label>--}}
                                        {{--</div>--}}





                                        {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                        {{--<input type="hidden" class="form-text" id="id_car_fk" name="id_car_fk" value="{{ $carsP->id_car }}">--}}
                                        {{--<input type="text" class="form-text" value="{{ $carsP->plate_number }}" disabled>--}}

                                        {{--<span class="bar"></span>--}}
                                        {{--<label>Placa</label>--}}
                                        {{--</div>--}}


                                        <div class="form-group form-animate-text col-md-12" style="margin-top:10px !important;">
                                            <input type="text" class="form-text" id="" name="" value="{{ $park->parking_address }}" >
                                            <span class="bar"></span>
                                            <label>Parqueo</label>

                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" value="{{ $resClient->confirmation_code }}">
                                            <span class="bar"></span>
                                            {{--<label>Codigo</label>--}}
                                        </div>

                                    </div>

                                    <div class="col-md-12 panel-heading">
                                        <h4>Datos personales</h4>
                                    </div>

                                    <div class="col-md-12 form-group form-animate-text">

                                        <div class="col-md-3 control-label text-right">
                                            <label class="control-label text-right">Nombre</label>
                                        </div>
                                        <div class="form-group form-animate-text col-md-9" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" value="{{ $usersP->name }}"  >
                                            <span class="bar"></span>
                                        </div>

                                        <div class="col-md-3 control-label text-right">
                                            <label class="control-label text-right">Correo</label>
                                        </div>
                                        <div class="form-group col-md-9" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" value="{{ $usersP->email }}"  >
                                            <span class="bar"></span>
                                        </div>
                                    </div>

                                    {{--<div class="col-md-12">--}}
                                        {{--<div class="col-md-6" style="margin-top:5px;">--}}
                                            {{--<button class="btn ripple-infinite btn-raised btn-success" type="submit" value="Submit">--}}
                                                {{--<div>--}}
                                                    {{--<span>Reservar</span>--}}
                                                {{--</div>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-6" style="margin-top:5px;">--}}
                                            {{--<button class="btn ripple-infinite btn-raised btn-danger" type="reset" value="Submit">--}}
                                                {{--<div>--}}
                                                    {{--<span>Limpiar</span>--}}
                                                {{--</div>--}}
                                            {{--</button>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                {{--</form>--}}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection