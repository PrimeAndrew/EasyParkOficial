<!DOCTYPE html>
<html>
<head>
    <title>DeleteReservation</title>
</head>
<body>
<center>

        <table>
            <tr>
                <td>ID</td>
                <td>Entry Date</td>
                <td>Departure Date</td>
                <td>Delete</td>
            </tr>
            @foreach($data as $value)

                <tr>
                    <td>{{ $value->id_reservations }}</td>
                    <td>{{ $value->reservation_entry_date }}</td>
                    <td>{{ $value->reservation_departure_date }}</td>
                    <td><a href="/delete/{{$value -> id_reservations}}"><button>Delete</button></a></td>
                </tr>

            @endforeach
        </table>


</center>
</body>
</html>