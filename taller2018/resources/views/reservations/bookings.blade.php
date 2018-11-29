@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Paso 1: Check In/Out clientes con cuenta</h2>

                <input type="text" placeholder="Buscar cliente..">
                <button type="submit">Buscar</button>
                <a href="/registerCliente"><button type="submit" style="float:right">Nuevo cliente</button></a>

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
                        <!-- th onclick="sortTable(0)" style="cursor:pointer">Cliente</th-->
                        <!-- th onclick="sortTable(1)" style="cursor:pointer">Matricula</th-->
                        <th onclick="sortTable(0)" style="cursor:pointer">Fecha de entrada</th>
                        <th onclick="sortTable(1)" style="cursor:pointer">Hora de entrada</th>
                        <th onclick="sortTable(2)" style="cursor:pointer">Fecha de salida</th>
                        <th onclick="sortTable(3)" style="cursor:pointer">Hora de salida</th>
                        <th onclick="sortTable(5)" style="cursor:pointer">Estado</th>
                        <th>Accion</th>
                    </tr>

                    @foreach($data as $value)
                        <tr>
                            <!-- td>{<!--{ $value->name }}</td>
                            <td>{<!--{ $value->plate_number }}</td> -->
                            <td>{{ $value->entry_date }}</td>
                            <td>{{ $value->entry_hour }}</td>
                            <td>{{ $value->departure_date }}</td>
                            <td>{{ $value->departure_hour }}</td>
                            <td>{{ $value->reservation_state }}</td>
                            @if($value->reservation_state!='Finalizado')
                            <td><?php
                                $state = $value->reservation_state;
                                $checkinurl = ("/checkin/" . $value->id_reservations);
                                $checkouturl = ("/checkout/" . $value->id_reservations);
                                if ($state == 'Ocupado'){
                                    echo "<a href='$checkouturl'><button>Ver</button></a>";
                                } else{

                                    echo "<a href='$checkinurl'><button>Ver</button></a>";

                                }
                                ?>
                            </td>
                            @endif


                        </tr>

                    @endforeach
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


