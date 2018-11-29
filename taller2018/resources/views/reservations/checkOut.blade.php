@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Paso 2: Finalizar reserva de clientes con cuenta</h2>
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
                        <th>Monto a pagar</th>
                        <th>Codigo Reserva</th>
                    </tr>

                    <tr>
                        <td>{{$car->plate_number}}</td>
                        <td>{{ $reserva->entry_date }}</td>
                        <td>{{ $reserva->departure_date }}</td>
                        @if($reserva->entry_date == $reserva->departure_date)
                            <td>{{$reserva->amount}}</td>
                        @else
                            <td>Calculando monto</td>
                        @endif
                        <td>{{$reserva->confirmation_code}}</td>
                        <td>
                            {{--<form action="/reservationClients" method="get">--}}
{{--                                <input type="text" name="{{ $reserva->id_reservations }}" value="{{ $reserva->id_reservations }}">--}}
                                {{--<button type="submit" class="btn btn-success mb-3">Finalizar reserva</button>--}}
                            <a href={{ action('ReservationClientController@edit',$reserva->id_reservations) }}><button >Finalizar reserva</button></a>

                            <?php
//                                $ccc = ("/reservationClients/create".$reserva->id_reservations);
//
//                                echo "<a href='$ccc'><button >Finalizar reserva</button></a>"

                            ?>

                            {{--</form>--}}

                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
@endsection


