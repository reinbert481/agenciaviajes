@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? 'Show Vehiculo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $vehiculo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $vehiculo->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $vehiculo->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Preciopordia:</strong>
                            {{ $vehiculo->precioPorDia }}
                        </div>
                        <div class="form-group">
                            <strong>Tipocaja:</strong>
                            {{ $vehiculo->tipoCaja }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidadpuertas:</strong>
                            {{ $vehiculo->cantidadPuertas }}
                        </div>
                        <div class="form-group">
                            <strong>Aireacond:</strong>
                            {{ $vehiculo->aireAcond }}
                        </div>
                        <div class="form-group">
                            <strong>Kilomhabilitado:</strong>
                            {{ $vehiculo->kilomHabilitado }}
                        </div>
                        <div class="form-group">
                            <strong>Tipocobertura:</strong>
                            {{ $vehiculo->tipoCobertura }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
