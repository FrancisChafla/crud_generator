<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_empleado') }}
            {{ Form::select('id_empleado',$empleados,$empleadoscarrera->id_empleado, ['class' => 'form-control' . ($errors->has('id_empleado') ? ' is-invalid' : ''), 'placeholder' => 'Id Empleado']) }}
            {!! $errors->first('id_empleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_carrera') }}
            {{ Form::select('id_carrera',$carreras,$empleadoscarrera->id_carrera, ['class' => 'form-control' . ($errors->has('id_carrera') ? ' is-invalid' : ''), 'placeholder' => 'Id Carrera']) }}
            {!! $errors->first('id_carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_periodo') }}
            {{ Form::select('id_periodo',$periodos,$empleadoscarrera->id_periodo, ['class' => 'form-control' . ($errors->has('id_periodo') ? ' is-invalid' : ''), 'placeholder' => 'Id Periodo']) }}
            {!! $errors->first('id_periodo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $empleadoscarrera->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuariomodifica') }}
            {{ Form::select('usuariomodifica',$usuarios,$empleadoscarrera->usuariomodifica, ['class' => 'form-control' . ($errors->has('usuariomodifica') ? ' is-invalid' : ''), 'placeholder' => 'Usuariomodifica']) }}
            {!! $errors->first('usuariomodifica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>