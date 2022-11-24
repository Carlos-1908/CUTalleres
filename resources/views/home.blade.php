@extends('layouts.app')

@section('content')
<header>
<link href="css/styles.css" rel="stylesheet" />
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Alumnos') }}
                                    </span>

                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                
                                                <th>Nombre Alumno</th>
                                                <th>Carrera</th>
                                                <th>Correo Alumno</th>
                                                <th>Telefono</th>
                                                <th>Taller</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Alumno as $alum)
                                                <tr>

                                                    <td>{{ $alum->nombre }}</td>
                                                    <td>{{ $alum->carrera }}</td>
                                                    <td>{{ $alum->correo }}</td>
                                                    <td>{{ $alum->telefono }}</td>
                                                    <td>{{ $alum->taller }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
