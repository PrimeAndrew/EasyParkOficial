@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Eliminar Reserva</h2>

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

        <table style="width:100%" align="center">
            <tr>
                <th>ID</th>
                <th>Fecha de Entrada</th>
                <th>Hora de Entrada</th>
                <th>Fecha de Salida</th>
                <th>Hora de Salida</th>
                <th>Eliminar</th>
            </tr>
            @foreach($data as $value)

                <tr>
                    <td>{{ $value->id_reservations }}</td>
                    <td>{{ $value->entry_date }}</td>
                    <td>{{ $value->entry_hour }}</td>
                    <td>{{ $value->departure_date }}</td>
                    <td>{{ $value->departure_hour }}</td>
                    <td><a href="/delete/{{$value -> id_reservations}}"><button>Eliminar</button></a></td>
                </tr>

            @endforeach
        </table>

            </div>
        </div>
    </div>
@endsection

