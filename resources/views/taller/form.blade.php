<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_taller') }}
            {{ Form::text('nombre_taller', $taller->nombre_taller, ['class' => 'form-control' . ($errors->has('nombre_taller') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Taller']) }}
            {!! $errors->first('nombre_taller', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_profesor') }}
            {{ Form::text('nombre_profesor', $taller->nombre_profesor, ['class' => 'form-control' . ($errors->has('nombre_profesor') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Profesor']) }}
            {!! $errors->first('nombre_profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo_profesor') }}
            {{ Form::text('correo_profesor', $taller->correo_profesor, ['class' => 'form-control' . ($errors->has('correo_profesor') ? ' is-invalid' : ''), 'placeholder' => 'Correo Profesor']) }}
            {!! $errors->first('correo_profesor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $taller->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br><div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Crear Taller</button>
    </div>
</div>