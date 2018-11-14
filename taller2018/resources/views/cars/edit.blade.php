@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">
                {{--<div class="col-md-6 col-sm-12">--}}

                <div class="col-md-20">
                    <div class="col-md-12 panel">
                        <div class="col-md-12 panel-heading">
                            <h4>Editar Vehiculo</h4>
                        </div>
                        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">
                                <form class="cmxform" id="signupForm" method="POST" action="{{  route('cars.update',$car->id_car) }}" >
                                    @csrf
                                    @method('PUT')
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" id="plate_number" name="plate_number" value="{{ $car->plate_number }}" required>
                                            <span class="bar"></span>
                                            <label>Numero de placa</label>
                                        </div>

                                        <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                                            <div class="col-sm-5 control-label text-right">
                                                <label class="control-label text-right">Modelo</label>
                                            </div>
                                            <div class="col-sm-7 control-label text-left">

                                                <select class="form-control" name="id_car_model_fk">
                                                    @foreach($cars_models as $cars_model)
                                                        <option value="{{ $cars_model['id_car_model'] }}">{{ $cars_model['model'] }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                                            <div class="col-sm-5 control-label text-right">
                                                <label class="control-label text-right">Tipo de auto</label>
                                            </div>
                                            <div class="col-sm-7 control-label text-left">

                                                <select class="form-control" name="id_car_type_fk">
                                                    @foreach($cars_types as $cars_type)
                                                        <option value="{{ $cars_type['id_car_type'] }}">{{ $cars_type['car_type'] }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="col-md-12 form-group " style="margin-top:50px !important;">
                                            <div class="col-sm-5 form-group text-right form-animate-text text-right">
                                                <label class="control-label text-right">Color</label>
                                            </div>
                                            <div class="col-sm-7 control-label text-left">
                                                <input type="color" class="form-text" id="color" name="color" size="10" value="{{ $car->color }}">
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-group form-animate-text" style="margin-top:20px !important;">
                                            <div class="col-sm-5 control-label text-right">
                                                <label class="control-label text-right">Usuario</label>
                                            </div>
                                            <div class="col-sm-7 control-label text-left">

                                                <select class="form-control" name="id_roles_users_fk">
                                                    @foreach($user_roles as $user_role)
                                                        <option value="{{ $user_role['id_roles_users'] }}">{{ $user_role['id_users_fk'] }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-6" style="margin-top:5px;">
                                            <button class="btn ripple-infinite btn-raised btn-success" type="submit" value="Submit">
                                                <div>
                                                    <span>Editar</span>
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
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
