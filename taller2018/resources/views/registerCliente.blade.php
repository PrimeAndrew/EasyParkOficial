@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Registrar nuevo cliente</h2>

    <form action="/insert" method="post">
        <table >
            <tr>
                {{ csrf_field() }}
                <td>Name: </td>
                <td><input type="text" name="users_name"></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="users_lastname"></td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><input type="number" name="users_phone"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="users_email"></td>
            </tr>
            <tr>
                <td>Document Type: </td>
                <td><input type="text" name="users_type_doc"></td>
            </tr>
            <tr>
                <td>Document Number: </td>
                <td><input type="number" name="users_doc_number"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="users_password"></td>
            </tr>
            <tr>
                <td>Status: </td>
                <td><input type="text" name="users_status"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

            </div>
        </div>
    </div>
@endsection



@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">
                {{--<div class="col-md-6 col-sm-12">--}}

                <div class="col-md-20">
                    <div class="col-md-12 panel">
                        <div class="col-md-12 panel-heading">
                            <h4>Registrar cliente nuevo</h4>
                        </div>
                        <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                            <div class="col-md-12">
                                <form class="cmxform" id="signupForm" method="POST" action="/insert" >
                                    @csrf
                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="users_name" required>
                                            <span class="bar"></span>
                                            <label>Nombre</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="users_lastname" required>
                                            <span class="bar"></span>
                                            <label>Apellido</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="users_phone" required>
                                            <span class="bar"></span>
                                            <label>Color</label>
                                        </div>


                                        <div class="col-md-12 form-group form-animate-text" style="margin-top:10px !important;">
                                            <div class="col-sm-5 control-label text-right">
                                                <label class="control-label text-right">Tipo de auto</label>
                                            </div>
                                            <div class="col-sm-7 ontrol-label text-left">

                                                <select class="form-control" name="id_car_type_fk">
                                                    @foreach($cars_types as $cars_type)
                                                        <option value="{{ $cars_type['id_car_type'] }}">{{ $cars_type['car_type'] }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
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
                                        <div class="col-md-4">
                                            <input class="submit btn btn-success" type="submit" value="Submit">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="submit btn btn-warning" type="reset" value="Submit">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="submit btn btn-danger" type="cancel" value="Submit">
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
