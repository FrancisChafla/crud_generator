@extends('layouts.app')

@section('template_title')
    {{ $empleadoscarrera->name ?? "{{ __('Show') Empleadoscarrera" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleadoscarrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleadoscarreras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Empleado:</strong>
                            {{ $empleadoscarrera->id_empleado }}
                        </div>
                        <div class="form-group">
                            <strong>Id Carrera:</strong>
                            {{ $empleadoscarrera->id_carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Id Periodo:</strong>
                            {{ $empleadoscarrera->id_periodo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $empleadoscarrera->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Usuariomodifica:</strong>
                            {{ $empleadoscarrera->usuariomodifica }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
