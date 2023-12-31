@extends('layouts.app')

@section('template_title')
    Carrera
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Carrera') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('carreras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Nombrecarrera</th>
                                        <th>Facultad</th>
                                        <th>Usuariomodifica</th>
                                        <th>Creado</th>
                                        <th>Actualizado</th>
                                        <th>Estado</th>                           
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carreras as $carrera)
                                        <tr>
                                            <td>{{ ++$i }}</td>                                        
                                            <td>{{ $carrera->nombrecarrera }}</td>
                                            <td>{{ $carrera->facultad }}</td>
                                            <td>{{ $carrera->usuariomodifica }}</td>
                                            <td>{{ $carrera->created_at }}</td>
                                            <td>{{ $carrera->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('carreras.toggle', $carrera->id) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf
                                                    <button type="submit" class="btn btn-{{ $carrera->estado == 'Activado' ? 'success' : 'danger' }} btn-sm">
                                                        {{ $carrera->estado == 'Activado' ? 'Activado' : 'Desactivado' }}
                                                    </button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="{{ route('carreras.destroy',$carrera->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('carreras.show',$carrera->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('carreras.edit',$carrera->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $carreras->links() !!}
            </div>
        </div>
    </div>
@endsection
