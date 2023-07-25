@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Editar EmpleadoActividad</h1>
        <form action="{{ route('empleadoactividad.update', $empleadoActividad->idEmpActivid) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="idEmpActivid" class="font-weight-bold">ID Emp Activid</label>
                <input type="number" name="idEmpActivid" class="form-control" value="{{ $empleadoActividad->idEmpActivid }}" readonly required>
            </div>
            <div class="form-group">
                <label for="idempleado" class="font-weight-bold">ID Empleado</label>
                <input type="number" name="idempleado" class="form-control" value="{{ $empleadoActividad->idempleado }}" required>
            </div>
            <div class="form-group">
                <label for="nombreEmpleado" class="font-weight-bold">Nombre Empleado</label>
                <input type="text" name="nombreEmpleado" class="form-control" maxlength="40" value="{{ $empleadoActividad->nombreEmpleado }}" required>
            </div>
            <div class="form-group">
                <label for="actividad" class="font-weight-bold">Actividad</label>
                <input type="text" name="actividad" class="form-control" maxlength="80" value="{{ $empleadoActividad->actividad }}" required>
            </div>
            <div class="form-group">
                <label for="fechaInicio" class="font-weight-bold">Fecha Inicio</label>
                <input type="date" name="fechaInicio" class="form-control" value="{{ $empleadoActividad->fechaInicio }}" required>
            </div>
            <div class="form-group">
                <label for="fechafin" class="font-weight-bold">Fecha Fin</label>
                <input type="date" name="fechafin" class="form-control" value="{{ $empleadoActividad->fechafin }}" required>
            </div>
            <div class="form-group">
                <label for="estado" class="font-weight-bold">Estado</label>
                <input type="number" name="estado" class="form-control" value="{{ $empleadoActividad->estado }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
