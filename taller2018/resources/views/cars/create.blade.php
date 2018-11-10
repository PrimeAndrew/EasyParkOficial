@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">
                <div class="col-md-6 col-sm-12">
                    {{----}}
                    <div class="col-md-20">
                        <div class="col-md-12 panel">
                            <div class="col-md-12 panel-heading">
                                <h4>Form Validation</h4>
                            </div>
                            <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                                <div class="col-md-12">
                                    <form class="cmxform" id="signupForm" method="POST" action="{{  route('cars.store') }}" >
                                        @csrf
                                        <div class="col-md-6">
                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" id="plate_number" name="plate_number" required>
                                                <span class="bar"></span>
                                                <label>Numero de placa</label>
                                            </div>

                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" id="color" name="color" required>
                                                <span class="bar"></span>
                                                <label>Color</label>
                                            </div>

                                            {{--<div class="form-group form-animate-text" style="margin-top:40px !important;">--}}
                                                {{--<input type="text" class="form-text" id="id_car_type_fk" name="id_car_type_fk" required>--}}
                                                {{--<span class="bar"></span>--}}
                                                {{--<label>Tipo</label>--}}
                                            {{--</div>--}}
                                            {{----}}
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label text-right">Usuario</label>
                                                <div class="col-sm-10">
                                                    <div class="fa-align-left">
                                                        <select class="form-control" name="id_roles_users_fk">
                                                            @foreach($cars_types as $cars_type)
                                                                <option value="{{ $cars_type['id_car_type'] }}}">{{ $cars_type['car_type'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            {{----}}

                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" id="id_car_model_fk" name="id_car_model_fk" required>
                                                <span class="bar"></span>
                                                <label>Modelo</label>
                                            </div>

                                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                                <input type="text" class="form-text" id="id_roles_users_fk" name="id_roles_users_fk" required>
                                                <span class="bar"></span>
                                                <label>User</label>
                                            </div>



                                        </div>
                                        <div class="col-md-12">
                                            <input class="submit btn btn-danger" type="submit" value="Submit">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{----}}
                </div>
            </div>
        </div>
    </div>
@endsection
