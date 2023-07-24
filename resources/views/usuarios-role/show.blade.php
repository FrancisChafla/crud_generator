@extends('layouts.app')

@section('template_title')
    {{ $usuariosRole->name ?? "{{ __('Show') Usuarios Role" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuarios Role</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios-roles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $usuariosRole->usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Roles Id:</strong>
                            {{ $usuariosRole->roles_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
