@extends('layouts.app')

@section('template_title')
    Empleadoscarrera
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Empleadoscarrera') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('empleadoscarreras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
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
                                        
										<th>Id Empleado</th>
										<th>Id Carrera</th>
										<th>Id Periodo</th>
										<th>Fecha</th>
										<th>Usuariomodifica</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empleadoscarreras as $empleadoscarrera)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empleadoscarrera->empleado->nombres }}</td>
											<td>{{ $empleadoscarrera->carrera->nombrecarrera }}</td>
											<td>{{ $empleadoscarrera->periodo->idnombre }}</td>
											<td>{{ $empleadoscarrera->fecha }}</td>
											<td>{{ $empleadoscarrera->usuariomodifica }}</td>
                                            <td>{{ $empleadoscarrera->created_at }}</td>
                                            <td>{{ $empleadoscarrera->updated_at }}</td>

                                            <td>
                                                <form action="{{ route('empleadoscarreras.destroy',$empleadoscarrera->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('empleadoscarreras.show',$empleadoscarrera->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('empleadoscarreras.edit',$empleadoscarrera->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empleadoscarreras->links() !!}
            </div>
        </div>
    </div>
@endsection
