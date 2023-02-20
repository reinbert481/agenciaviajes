@extends('layouts.app')

@section('template_title')
    Vehiculo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <h3>{{ __('Vehículos') }}</h3>
                            </span>

                             <div class="float-right">
                                @can('crear-vehiculo')
                                    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Agregar Vehículo') }}
                                    </a>
                                @endcan
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Marca</th>
										<th>Modelo</th>
										<th>Foto</th>
										<th>Precio/Día</th>
										<th>Caja</th>
										<th>Cant. Puertas</th>
										<th>Aire</th>
										<th>km Habilitados</th>
										<th>Cobertura</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vehiculo->nombre }}</td>
											<td>{{ $vehiculo->marca }}</td>
											<td>{{ $vehiculo->modelo }}</td>
											<td>{{ $vehiculo->imagen }}</td>
											<td>{{ $vehiculo->precioPorDia }}</td>
											<td>{{ $vehiculo->tipoCaja }}</td>
											<td>{{ $vehiculo->cantidadPuertas }}</td>
											<td>{{ $vehiculo->aireAcond }}</td>
											<td>{{ $vehiculo->kilomHabilitado }}</td>
											<td>{{ $vehiculo->tipoCobertura }}</td>

                                            <td>
                                                <form action="{{ route('vehiculos.destroy',$vehiculo->id) }}" method="POST">
                                                    @can('ver-vehiculo')
                                                        <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show',$vehiculo->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    @endcan
                                                    @can('editar-vehiculo')
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit',$vehiculo->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-vehiculo')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $vehiculos->links() !!}
            </div>
        </div>
    </div>
@endsection
