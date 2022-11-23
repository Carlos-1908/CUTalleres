@extends('layouts.app')

@section('template_title')
    Taller
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Taller') }}
                            </span>

                             <div class="float-right">
                             <a class="btn btn-sm btn-primary " href="{{ url('/home') }}"><i class="fa fa-fw fa-eye"></i> Alumnos Registrados</a>
                                <a href="{{ route('tallers.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                                </a>
                              </div>
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
                                        <th>No</th>
                                        
										<th>Nombre Taller</th>
										<th>Nombre Profesor</th>
										<th>Correo Profesor</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tallers as $taller)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $taller->nombre_taller }}</td>
											<td>{{ $taller->nombre_profesor }}</td>
											<td>{{ $taller->correo_profesor }}</td>
											<td>{{ $taller->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('tallers.destroy',$taller->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tallers.show',$taller->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tallers.edit',$taller->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tallers->links() !!}
            </div>
        </div>
    </div>
@endsection
