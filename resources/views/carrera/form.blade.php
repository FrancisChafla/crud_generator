<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombrecarrera') }}
            {{ Form::text('nombrecarrera', $carrera->nombrecarrera, ['class' => 'form-control' . ($errors->has('nombrecarrera') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecarrera']) }}
            {!! $errors->first('nombrecarrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facultad') }}
            {{ Form::text('facultad', $carrera->facultad, ['class' => 'form-control' . ($errors->has('facultad') ? ' is-invalid' : ''), 'placeholder' => 'Facultad']) }}
            {!! $errors->first('facultad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuariomodifica') }}
            {{ Form::select('usuariomodifica',$usuarios,$carrera->usuariomodifica, ['class' => 'form-control' . ($errors->has('usuariomodifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('usuariomodifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $carrera->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>