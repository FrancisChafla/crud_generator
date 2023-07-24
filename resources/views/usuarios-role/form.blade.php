<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('usuario_id') }}
            {{ Form::select('usuario_id',$usuarios,$usuariosRole->usuario_id, ['class' => 'form-control' . ($errors->has('usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('roles_id') }}
            {{ Form::select('roles_id',$roles,$usuariosRole->roles_id, ['class' => 'form-control' . ($errors->has('roles_id') ? ' is-invalid' : ''), 'placeholder' => 'Roles Id']) }}
            {!! $errors->first('roles_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>