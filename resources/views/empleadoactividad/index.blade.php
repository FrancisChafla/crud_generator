@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Empleados API</h1>
        <a href="{{ route('empleadoactividad.create') }}" class="btn btn-primary mb-2">Crear Empleado</a>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Empleado</th>
                        <th>Actividad</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleadoActividades as $empleadoActividad)
                        <tr>
                            <td>{{ $empleadoActividad->idEmpActivid }}</td>
                            <td>{{ $empleadoActividad->nombreEmpleado }}</td>
                            <td>{{ $empleadoActividad->actividad }}</td>
                            <td>{{ $empleadoActividad->fechaInicio }}</td>
                            <td>{{ $empleadoActividad->fechafin }}</td>
                            <td>{{ $empleadoActividad->estado }}</td>
                            <td>
                                <a href="{{ route('empleadoactividad.show', $empleadoActividad->idEmpActivid) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('empleadoactividad.edit', $empleadoActividad->idEmpActivid) }}" class="btn btn-warning btn-sm">Editar</a>
                                <form action="{{ route('empleadoactividad.destroy', $empleadoActividad->idEmpActivid) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta EmpleadoActividad?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
