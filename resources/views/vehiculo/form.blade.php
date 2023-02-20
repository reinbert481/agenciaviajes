<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $vehiculo->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $vehiculo->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::text('modelo', $vehiculo->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''), 'placeholder' => 'Modelo']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $vehiculo->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioPorDia') }}
            {{ Form::text('precioPorDia', $vehiculo->precioPorDia, ['class' => 'form-control' . ($errors->has('precioPorDia') ? ' is-invalid' : ''), 'placeholder' => 'Preciopordia']) }}
            {!! $errors->first('precioPorDia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoCaja') }}
            {{ Form::text('tipoCaja', $vehiculo->tipoCaja, ['class' => 'form-control' . ($errors->has('tipoCaja') ? ' is-invalid' : ''), 'placeholder' => 'Tipocaja']) }}
            {!! $errors->first('tipoCaja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidadPuertas') }}
            {{ Form::text('cantidadPuertas', $vehiculo->cantidadPuertas, ['class' => 'form-control' . ($errors->has('cantidadPuertas') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadpuertas']) }}
            {!! $errors->first('cantidadPuertas', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('aireAcond') }}
            {{ Form::text('aireAcond', $vehiculo->aireAcond, ['class' => 'form-control' . ($errors->has('aireAcond') ? ' is-invalid' : ''), 'placeholder' => 'Aireacond']) }}
            {!! $errors->first('aireAcond', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilomHabilitado') }}
            {{ Form::text('kilomHabilitado', $vehiculo->kilomHabilitado, ['class' => 'form-control' . ($errors->has('kilomHabilitado') ? ' is-invalid' : ''), 'placeholder' => 'Kilomhabilitado']) }}
            {!! $errors->first('kilomHabilitado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipoCobertura') }}
            {{ Form::text('tipoCobertura', $vehiculo->tipoCobertura, ['class' => 'form-control' . ($errors->has('tipoCobertura') ? ' is-invalid' : ''), 'placeholder' => 'Tipocobertura']) }}
            {!! $errors->first('tipoCobertura', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>