@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Roles') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @can('crear-rol')
                        <a class="btn btn-warning" href="{{ route('roles.create') }}">Nuevo</a>
                    @endcan

                    <table class="table table-striped mt-2">
                        <thead style="background-color:#6777ef">
                            <th style="color:#fff;">Rol</th>
                            <th style="color:#fff;">Acciones</th>
                        </thead>
                        @foreach($roles as $role)
                        <tbody>
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    @can('editar-rol')
                                        <a class="btn btn-info" href="{{ route('roles.edit',$role->id) }}">Editar</a>
                                    @endcan

                                    @can('borrar-rol')
                                        {!! Form::open(['method'=>'DELETE','route'=>['roles.destroy',$role->id],'style'=>'display:inline']) !!}
                                            {!! Form::submit('borrar',['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $roles->links() !!}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
