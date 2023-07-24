<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rol') }}
            {{ Form::text('rol', $role->rol, ['class' => 'form-control' . ($errors->has('rol') ? ' is-invalid' : ''), 'placeholder' => 'Rol']) }}
            {!! $errors->first('rol', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-success {{ $role->estado === 'activo' ? 'active' : '' }}">
                    {{ Form::radio('estado', 'activo', $role->estado === 'activo') }} Activo
                </label>
                <label class="btn btn-danger {{ $role->estado === 'inactivo' ? 'active' : '' }}">
                    {{ Form::radio('estado', 'inactivo', $role->estado === 'inactivo') }} Inactivo
                </label>
            </div>
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
