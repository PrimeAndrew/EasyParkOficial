@extends('layouts.layout')
@section('content')
    <?php use App\Http\Controllers\CheckInController;?>
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Paso 2: Confirmar reserva clientes con cuenta</h2>
                <a href="/bookings"><button>Atras</button></a>
                <h2>Informacion actual</h2>

                <style>
                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }

                    td, th {
                        border: 1px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                    }
                </style>

                <table id="myTable" style="width:100%" align="center">
                    <tr>
                        <!--th>Parqueo</th-->
                        <th>Matricula</th>
                        <th>Fecha de entrada</th>
                        <th>Fecha de salida</th>
                        <th>Horas Reserva</th>
                        <th>Monto a pagar</th>
                        <th>Codigo Reserva</th>
                    </tr>
                        <tr>
                            <td>{{$car->plate_number}}</td>
                            <td>{{ $reserva->entry_date }}</td>
                            <td>{{ $reserva->departure_date }}</td>
                            @if($reserva->entry_date == $reserva->departure_date)
                           <td>{{$tiempot}}</td>
                            <td>{{$precio}}</td>
                            @else
                            <td>Calculando timepo</td>
                            <td>Calculando monto</td>
                            @endif
                            <td>{{$cod}}</td>
                            <td><a href="/bookings"><button style="float:right">Confirmar reserva</button></a></td>
                        </tr>

                </table>


            </div>
        </div>
    </div>
@endsection


