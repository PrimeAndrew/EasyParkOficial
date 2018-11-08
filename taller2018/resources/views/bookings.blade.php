@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                    <h2>Paso 1: Check In/Out clientes con cuenta</h2>

                    <input type="text" placeholder="Buscar cliente..">
                    <button type="submit">Buscar</button>
                    <button type="submit" style="float:right">Nuevo cliente</button>

                    <table style="width:100%" align="center">
                        <tr>
                            <th>Apellido_Cliente</th>
                            <th>Nombre_Cliente</th>
                            <th>CI</th>
                            <th>Matricula</th>
                            <th>Fecha</th>
                            <th>Estado</th>
                            <th>Accion</th>
                        </tr>
                        <tr>
                            <td>Smith</td>
                            <td>John</td>
                            <td>4281762</td>
                            <td>4125-ETT</td>
                            <td>10/06/18</td>
                            <td>Reserva</td>
                            <td>
                                <button type="button">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Smith</td>
                            <td>John</td>
                            <td>4281762</td>
                            <td>4125-ETT</td>
                            <td>10/06/18</td>
                            <td>Pagado</td>
                            <td>
                                <button type="button">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Smith</td>
                            <td>John</td>
                            <td>4281762</td>
                            <td>4125-ETT</td>
                            <td>10/06/18</td>
                            <td>Cancelado</td>
                            <td>
                                <button type="button">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Smith</td>
                            <td>John</td>
                            <td>4281762</td>
                            <td>4125-ETT</td>
                            <td>10/06/18</td>
                            <td>Ocupado</td>
                            <td>
                                <button type="button">Ver</button>
                            </td>
                        </tr>
                    </table>

            </div>
        </div>
    </div>
@endsection


