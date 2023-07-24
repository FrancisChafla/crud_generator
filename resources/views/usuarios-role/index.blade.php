@extends('layouts.app')

@section('template_title')
    Usuarios Role
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuarios Role') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios-roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Usuario Id</th>
										<th>Roles Id</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuariosRoles as $usuariosRole)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $usuariosRole->usuario->nombre }}</td>
											<td>{{ $usuariosRole->role->rol }}</td>
                                            <td>{{ $usuariosRole->created_at }}</td>
                                            <td>{{ $usuariosRole->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('usuarios-roles.destroy',$usuariosRole->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('usuarios-roles.show',$usuariosRole->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('usuarios-roles.edit',$usuariosRole->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $usuariosRoles->links() !!}
            </div>
        </div>
    </div>
@endsection
