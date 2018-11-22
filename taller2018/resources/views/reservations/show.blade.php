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
                        <div class="panel-heading">
                            <h4>Informacion del Parqueo:</h4>
                        </div>
                        <div class="table-container">

                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre</th>
                                <th>Total esapcio</th>
                                <th>Cod Espacio</th>
                                <th>Estado</th>
                                <th># Espacios</th>
                                <th>###</th>
                                </thead>
                                <tbody>
                                @if($ocupados->count())

                                    @foreach($ocupados as $parking)
                                        <tr>
                                            <td>{{ $parking->parking_name }}</td>
                                            <td>{{ $parking->total_spaces }}</td>
                                            <td>{{ $parking->codigo }}</td>

                                            @if($parking->estado=='Libre')
                                            <td style="background-color:#ACEC70"><span > {{ $parking->estado }}</span></td>
                                             <td><a class="btn btn-primary btn-xs"
                                                       href="{{action('ReservationClientController@show', $parking->id_parkings)}}"><span
                                                                class="glyphicon glyphicon-pencil"></span></a></td>
                                            @else
                                                <td ><span > {{ $parking->estado }}</span></td>
                                                <td>    </td>
                                            @endif
                                            <td>{{ $parking->id_parkings}}</td>
                                        </tr>
                                    @endforeach
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