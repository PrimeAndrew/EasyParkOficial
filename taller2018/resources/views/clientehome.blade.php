<!--

    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Registrar nuevo cliente</h2>

    <form action="/insert" method="post">
        <table >
            <tr>

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

-->


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
                                        {{ csrf_field() }}
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
                                            <label>Numero de telefono</label>
                                        </div>


                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type=email class="form-text" name="users_email" required>
                                            <span class="bar"></span>
                                            <label>Email</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">

                                            <select class="form-control" name="users_type_doc">
                                                <option value="carnet">Carnet</option>
                                                <option value="pasaporte">Pasaporte</option>
                                            </select>
                                            {{--<label>Tipo de documento</label>--}}
                                        </div>
                                        {{--<div class="form-group"><label class="col-sm-2 control-label text-right" >Tipo de documento</label>--}}
                                        {{--<div class="col-sm-10">--}}
                                        {{--<div class="col-sm-12 padding-0">--}}
                                        {{--<select class="form-control" name="users_type_doc">--}}
                                        {{--<option value="carnet">Carnet</option>--}}
                                        {{--<option value="pasaporte">Pasaporte</option>--}}
                                        {{--</select>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="text" class="form-text" name="users_doc_number" required>
                                            <span class="bar"></span>
                                            <label>Numero de documento</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="password" class="form-text" name="users_password" required>
                                            <span class="bar"></span>
                                            <label>Password</label>
                                        </div>

                                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                            <input type="password" class="form-text" name="users_password2" required>
                                            <span class="bar"></span>
                                            <label>Vuelva a ingresar el password</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-4">
                                            <input class="submit btn btn-success" type="submit" value="Continuar">
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
    {{--</div>--}}
@endsection
