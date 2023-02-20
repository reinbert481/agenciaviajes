@extends('layouts.app')

@section('template_title')
    Update Vehiculo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Vehiculo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('vehiculos.update', $vehiculo->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('vehiculo.form')

                        </form>
                        <a class="btn btn-secondary" href="{{ route('vehiculos.index') }}">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
