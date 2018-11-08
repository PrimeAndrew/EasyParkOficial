
@extends('layouts.navbar')
@extends('layouts.menu')
@extends('layouts.app')

@section('content')

    <h1 class="text-center">REGISTRO DE PARQUEO</h1>
    <div class="container">

        <a class="btn btn-success mb-3" href="{{ route('parkings.create')  }}">Agregar parqueo</a>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre del parqueo</th>
                <th scope="col">Direccion del parqueo</th>
                <th scope="col">Total de espacios</th>
                <th scope="col">Hora de apertura</th>
                <th scope="col">Hora de cierre</th>
                <th scope="col">Latitud del parqueo</th>
                <th scope="col">Longitud del parqueo</th>

            </tr>
            </thead>
            <tbody>
            @foreach($parkings as $parking)
                <tr>
                    <th scope="row">{{ $parking->id_parkings}}</th>
                    <td>{{ $parking->parking_name }}</td>
                    <td>{{ $parking->parking_address}}</td>
                    <td>{{ $parking->total_spaces }}</td>
                    <td>{{ $parking->open_hour }}</td>
                    <td>{{ $parking->close_hour }}</td>
                    <td>{{ $parking->latitude }}
                    <td>{{ $parking->longitud }}


                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
