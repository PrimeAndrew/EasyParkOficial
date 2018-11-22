@extends('layouts.layout')
@section('content')
    <?php use App\Http\Controllers\CheckInController;?>
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Paso 2: Confirmar reserva clientes con cuenta</h2>

                <h2>Actual</h2>

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
                        <!--th>Matricula</th-->
                        <th>Fecha de entrada</th>
                        <th>Fecha de salida</th>
                        <th>Monto a pagar</th>
                    </tr>

                        <tr>
                            <td>{{ $reserva->entry_date }}</td>
                            <td>{{ $reserva->departure_date }}</td>
                            <td>Calculando monto estimado...</td>

                        </tr>

                </table>
                <a href="/bookings"><button>Confirmar reserva</button></a>

            </div>
        </div>
    </div>
@endsection


