@extends('layouts.app')

@section('template_title')
    {{ $carrera->name ?? "{{ __('Show') Carrera" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Carrera</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carreras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombrecarrera:</strong>
                            {{ $carrera->nombrecarrera }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $carrera->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Facultad:</strong>
                            {{ $carrera->facultad }}
                        </div>
                        <div class="form-group">
                            <strong>Usuariomodifica:</strong>
                            {{ $carrera->usuariomodifica }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
