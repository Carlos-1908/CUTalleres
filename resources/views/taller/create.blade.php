@extends('layouts.app')

@section('template_title')
    Create Taller
@endsection

@section('content')
    <header>
    <link href="css/styles.css" rel="stylesheet" />
    </header>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Taller</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tallers.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('taller.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
