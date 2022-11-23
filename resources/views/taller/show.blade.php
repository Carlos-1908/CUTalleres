@extends('layouts.app')

@section('template_title')
    {{ $taller->name ?? 'Show Taller' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Taller</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tallers.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Taller:</strong>
                            {{ $taller->nombre_taller }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Profesor:</strong>
                            {{ $taller->nombre_profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Profesor:</strong>
                            {{ $taller->correo_profesor }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $taller->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
