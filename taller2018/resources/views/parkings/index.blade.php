@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

    <h1 class="text-center">REGISTRO DE PARQUEO</h1>
    <div class="container">

        <a class="btn btn-success mb-3" href="{{ route('parkings.create')  }}">Agregar parqueo</a>
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
                <th scope="col">Acciones</th>
              {{--PDF--}}

                <th style="text-align: right;">Action</th>

              {{--PDF--}}

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
                    <td>{{ $parking->latitude }}</td>
                    <td>{{ $parking->longitud }}</td>


                    {{--pdf--}}

                    <td>
                        <a href="{{ url('$parking/pdfexport/' . $parking->id_parkings) }}"class="btn btn-primary btn-xs">PDF Export</a>
                    </td>

                    {{--pdf--}}
                    <td><a class="btn btn-info mb-1" href="{{ route('parkings.edit', $parking->id_parkings) }}"><i class="far fa-edit"></i></a></td>
                    <td>

                        <form action="{{ route('parkings.destroy', $parking->id_parkings) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('seguro que quiere eliminar?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $parkings -> links()  }}
    </div>
            </div>
        </div>
    </div>
@endsection

