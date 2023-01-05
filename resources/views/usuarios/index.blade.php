@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Usuarios') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <a class="btn btn-warning" href="{{ route('usuarios.create') }}">Nuevo</a>

                    <table class="table table-striped mt-2">
                        <thead style="background-color:#6777ef;">
                            <th style="display:none;">ID</th>
                            <th style="color:#fff;">Nombre</th>
                            <th style="color:#fff;">E-mail</th>
                            <th style="color:#fff;">Rol</th>
                            <th style="color:#fff;">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td style="display:none;">{{$usuario->id}}</td>
                                    <td>{{$usuario->name}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        @if(!empty($usuario->getRoleNames()))
                                            @foreach($usuario->getRoleNames() as $rolName)
                                                <h5><span class="badge bg-dark">{{$rolName}}</span></h5>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST">
                                            <a class="btn btn-info" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $usuarios->links() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
