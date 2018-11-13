@extends('layouts.layout')
@section('content')
    <div id="content">
        <div class="panel">
            <div class="panel-body">

                <h1 class="text-center">Registro de vehiculos</h1>
                <div class="container">

                    <a class="btn btn-success mb-3" href="{{ route('cars.create')  }}">Agregar vehiculo</a>
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
                            <th scope="col">Placa/Matricula</th>
                            <th scope="col">Color</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Usuario</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <th scope="row">{{ $car->id_car}}</th>
                                <td>{{ $car->plate_number }}</td>
                                <td>{{ $car->color}}</td>
                                <td>{{ $car->id_car_type_fk }}</td>
                                <td>{{ $car->id_car_model_fk }}</td>
                                <td>{{ $car->id_roles_users_fk }}</td>
                                <td><a class="btn btn-info mb-1" href="{{ route('cars.edit', $car->id_car) }}"><i class="far fa-edit"></i></a></td>
                                <td>

                                    <form action="{{ route('cars.destroy', $car->id_car) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('seguro que quiere eliminar?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $cars -> links()  }}
                </div>
            </div>
        </div>
    </div>
@endsection
