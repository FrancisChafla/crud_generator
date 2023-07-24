@extends('layouts.app')

@section('template_title')
    Role
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Role') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Rol</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>
                                        <th>Estado</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $role->rol }}</td>
                                            <td>{{ $role->created_at }}</td>
                                            <td>{{ $role->updated_ }}</td>
                            
                                            <td>
                                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('roles.show', $role->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('roles.edit', $role->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                                <form action="{{ route('roles.toggle', $role->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" class="btn btn-secondary btn-sm"><i class="fa fa-fw fa-toggle-on"></i> {{ $role->estado === 'activo' ? 'Desactivar' : 'Activar' }}</button>
                                                </form>
                                            </td>
                                            <td>
                                                @if ($role->estado === 'activo')
                                                    <button class="btn btn-success btn-sm">Activo</button>
                                                @else
                                                    <button class="btn btn-danger btn-sm">Inactivo</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $roles->links() !!}
            </div>
        </div>
    </div>
@endsection
