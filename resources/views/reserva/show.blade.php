@extends('layouts.app')

@section('template_title')
    {{ $reserva->name ?? 'Show Reserva' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reserva</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Serviciocontratado:</strong>
                            {{ $reserva->servicioContratado }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $reserva->fechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $reserva->fechaFin }}
                        </div>
                        <div class="form-group">
                            <strong>Estadoreserva:</strong>
                            {{ $reserva->estadoReserva }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
