@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Paso 1: Check In/Out clientes con cuenta</h2>

                <input type="text" placeholder="Buscar cliente..">
                <button type="submit">Buscar</button>
                <button type="submit" style="float:right">Nuevo cliente</button>

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
                            <th onclick="sortTable(0)" style="cursor:pointer">Apellido_Cliente</th>
                            <th onclick="sortTable(1)" style="cursor:pointer">Nombre_Cliente</th>
                            <th onclick="sortTable(2)" style="cursor:pointer">CI</th>
                            <th onclick="sortTable(3)" style="cursor:pointer">Matricula</th>
                            <th>Fecha</th>
                            <th onclick="sortTable(4)" style="cursor:pointer">Estado</th>
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
                            <td>Snith</td>
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
                            <td>Spith</td>
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
                            <td>Sxith</td>
                            <td>John</td>
                            <td>4281762</td>
                            <td>4125-ETT</td>
                            <td>10/06/18</td>
                            <td>Ocupado</td>
                            <td>
                                <button type="button">Ver</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Saith</td>
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
                       <tr>
                            <td>Seith</td>
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
                            <td>Sdith</td>
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
                            <td>Slith</td>
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
                            <td>Szith</td>
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

                <script>
                    function sortTable(n) {
                        var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
                        table = document.getElementById("myTable");
                        switching = true;
                        //Set the sorting direction to ascending:
                        dir = "asc";
                        /*Make a loop that will continue until
                        no switching has been done:*/
                        while (switching) {
                            //start by saying: no switching is done:
                            switching = false;
                            rows = table.rows;
                            /*Loop through all table rows (except the
                            first, which contains table headers):*/
                            for (i = 1; i < (rows.length - 1); i++) {
                                //start by saying there should be no switching:
                                shouldSwitch = false;
                                /*Get the two elements you want to compare,
                                one from current row and one from the next:*/
                                x = rows[i].getElementsByTagName("TD")[n];
                                y = rows[i + 1].getElementsByTagName("TD")[n];
                                /*check if the two rows should switch place,
                                based on the direction, asc or desc:*/
                                if (dir == "asc") {
                                    if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                                        //if so, mark as a switch and break the loop:
                                        shouldSwitch= true;
                                        break;
                                    }
                                } else if (dir == "desc") {
                                    if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                                        //if so, mark as a switch and break the loop:
                                        shouldSwitch = true;
                                        break;
                                    }
                                }
                            }
                            if (shouldSwitch) {
                                /*If a switch has been marked, make the switch
                                and mark that a switch has been done:*/
                                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                                switching = true;
                                //Each time a switch is done, increase this count by 1:
                                switchcount ++;
                            } else {
                                /*If no switching has been done AND the direction is "asc",
                                set the direction to "desc" and run the while loop again.*/
                                if (switchcount == 0 && dir == "asc") {
                                    dir = "desc";
                                    switching = true;
                                }
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </div>
@endsection


