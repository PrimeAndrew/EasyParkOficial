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
                        <div class="btn-group">
                            <a href="" class="btn btn-info" >Parqueo encontrado</a>
                        </div>

                        <div class="table-container">
                            Parqueoes Encontrados:
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Total esapcio</th>
                                <th>Hora apertura</th>
                                <th>Hora Cierre</th>

                                </thead>
                                <tbody>
                                @if($gmaps->id_parkings)
                                        <tr>
                                            <td>{{ $gmaps->parking_name }}</td>
                                            <td>{{ $gmaps->parking_address}}</td>
                                            <td>{{ $gmaps->total_spaces }}</td>
                                            <!--<td>{{ $gmaps->zone }}</td>
                                            <td>{{$gmaps->city }}</td>-->
                                            <td>{{ $gmaps->open_hour }}</td>
                                            <td>{{$gmaps->close_hour }}</td>
                                        </tr>
                                @else
                                    <tr>
                                        <td colspan="8">No hay registros !!</td>
                                    </tr>
                                @endif
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