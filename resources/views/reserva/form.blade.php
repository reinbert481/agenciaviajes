<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('servicioContratado') }}
            {{ Form::text('servicioContratado', $reserva->servicioContratado, ['class' => 'form-control' . ($errors->has('servicioContratado') ? ' is-invalid' : ''), 'placeholder' => 'Serviciocontratado']) }}
            {!! $errors->first('servicioContratado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaInicio') }}
            {{ Form::text('fechaInicio', $reserva->fechaInicio, ['class' => 'form-control' . ($errors->has('fechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('fechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechaFin') }}
            {{ Form::text('fechaFin', $reserva->fechaFin, ['class' => 'form-control' . ($errors->has('fechaFin') ? ' is-invalid' : ''), 'placeholder' => 'Fechafin']) }}
            {!! $errors->first('fechaFin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estadoReserva') }}
            {{ Form::text('estadoReserva', $reserva->estadoReserva, ['class' => 'form-control' . ($errors->has('estadoReserva') ? ' is-invalid' : ''), 'placeholder' => 'Estadoreserva']) }}
            {!! $errors->first('estadoReserva', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>