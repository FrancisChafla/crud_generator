@extends('layouts.app')

@section('template_title')
    {{ $periodo->name ?? "{{ __('Show') Periodo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Periodo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('periodos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idnombre:</strong>
                            {{ $periodo->idnombre }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $periodo->fechainicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafin:</strong>
                            {{ $periodo->fechafin }}
                        </div>
                        <div class="form-group">
                            <strong>Usuariomodifica:</strong>
                            {{ $periodo->usuariomodifica }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $periodo->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
