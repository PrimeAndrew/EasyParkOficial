@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <div class="col-md-20">
                    <div class="col-md-12 panel">
                        <div class="col-md-12 panel-heading">
                            <h4>Reserva</h4>
                        </div>
                        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">
                                <form class="cmxform" id="signupForm" method="POST" action="{{  route('reservationClients.store',$park->id_parkings) }}" >
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="reservation_entry_date" name="reservation_entry_date" required maxlength="10" pattern="[/|0-9]+">
                                            <span class="bar"></span>
                                            <label>Fecha entrada(dd/mm/yyyy)</label>
                                        </div>


                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" required maxlength="10" pattern="[:|0-9]+">
                                            <span class="bar"></span>
                                            <label>Hora entrada</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" value="{{ $space->space_code }}" disabled required>
                                            <span class="bar"></span>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="parking_name" name="parking_name" value="{{ $park->parking_name }}" required disabled>
                                            <span class="bar"></span>
                                        </div>

                                    </div>

                                    <div class="col-md-6">

                                        {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                            {{--<input type="text" class="form-text" id="plate_number" name="plate_number" required maxlength="7" pattern="[/|0-9]+">--}}
                                            {{--<span class="bar"></span>--}}
                                            {{--<label>Fecha salida</label>--}}
                                        {{--</div>--}}

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text dateAnimate" required>
                                            <span class="bar"></span>
                                            <label><span class="fa fa-calendar"></span> Date Picker Animation</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" required maxlength="7" pattern="[:|0-9]+">
                                            <span class="bar"></span>
                                            <label>Hora salida</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" required disabled>
                                            <span class="bar"></span>
                                            <label>Placa</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" value="{{ $park->parking_address }}" required disabled>
                                            <span class="bar"></span>
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
                                            <input type="text" class="form-text" id="" name="" required >
                                            <span class="bar"></span>
                                        </div>
                                        <div class="col-md-3 control-label text-right">
                                            <label class="control-label text-right">Correo</label>
                                        </div>
                                        <div class="form-group col-md-9" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="" name="" required >
                                            <span class="bar"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6" style="margin-top:5px;">
                                            <button class="btn ripple-infinite btn-raised btn-success" type="submit" value="Submit">
                                                <div>
                                                    <span>Reservar</span>
                                                </div>
                                            </button>
                                        </div>

                                        <div class="col-md-6" style="margin-top:5px;">
                                            <button class="btn ripple-infinite btn-raised btn-danger" type="reset" value="Submit">
                                                <div>
                                                    <span>Limpiar</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection