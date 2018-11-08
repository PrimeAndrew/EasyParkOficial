@extends('layouts.app')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h2>Eliminar Reserva</h2>

    <form action="/insert" method="post">
        <table >
            <tr>
                {{ csrf_field() }}
                <td>Name: </td>
                <td><input type="text" name="users_name"></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><input type="text" name="users_lastname"></td>
            </tr>
            <tr>
                <td>Phone Number: </td>
                <td><input type="number" name="users_phone"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="users_email"></td>
            </tr>
            <tr>
                <td>Document Type: </td>
                <td><input type="text" name="users_type_doc"></td>
            </tr>
            <tr>
                <td>Document Number: </td>
                <td><input type="number" name="users_doc_number"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="users_password"></td>
            </tr>
            <tr>
                <td>Status: </td>
                <td><input type="text" name="users_status"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
    </form>

            </div>
        </div>
    </div>
@endsection