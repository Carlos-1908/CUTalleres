@extends('layouts.app')

@section('template_title')
    Update Taller
@endsection

@section('content')
    <header>
    <link href="css/styles.css" rel="stylesheet" />
    </header>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Taller</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tallers.update', $taller->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('taller.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
