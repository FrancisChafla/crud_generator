@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Usuarios Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Usuarios Role</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usuarios-roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usuarios-role.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
