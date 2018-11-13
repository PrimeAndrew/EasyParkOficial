@extends('layouts.layout')
@section('content')
    <div id="content">
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAKpOvOIRIGs6h9rZQHhJp-piWPx4nJ-60&sensor=TRUE_OR_FALSE">
        </script>
        <script type="text/javascript">var centreGot = false;</script>
        {!!$map['js']!!}

        <div class="panel">
            <div class="panel-body">
                <h2>Buscar Parqueo</h2>
                <div class="row">
                    <div class="col-md-6">
                        <!--div class="form-group">
                            <select class="select2-A"  name="id_zones">

                            </select>
                        </div>
                        <div class="form-group">
                            <select class="select2-A"  name="dire">

                            </select>
                        </div>
-->
                        <div class="table-container">
                            Parqueoes Encontrados:
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Total esapcio</th>
                                <th>Hora apertura</th>
                                <th>Hora Cierre</th>
                                <th>Seleccionar</th>
                                </thead>
                                <tbody>

                                    @foreach($parkings as $parking)
                                        <tr>
                                            <td>{{ $parking->parking_name }}</td>
                                            <td>{{ $parking->parking_address}}</td>
                                            <td>{{ $parking->total_spaces }}</td>
                                            <td>{{ $parking->open_hour }}</td>
                                            <td>{{ $parking->close_hour }}</td>
                                            <td><a class="btn btn-primary btn-xs" href="/registerCliente" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                    <div class="col-md-6">
                        {!!$map['html']!!}

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection