@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Detalle de EmpleadoActividad</h1>
        <div class="card">
            <div class="card-body">
                <p class="mb-2"><strong>ID:</strong> {{ $empleadoActividad->idEmpActivid }}</p>
                <p class="mb-2"><strong>Nombre Empleado:</strong> {{ $empleadoActividad->nombreEmpleado }}</p>
                <p class="mb-2"><strong>Actividad:</strong> {{ $empleadoActividad->actividad }}</p>
                <p class="mb-2"><strong>Fecha Inicio:</strong> {{ $empleadoActividad->fechaInicio }}</p>
                <p class="mb-2"><strong>Fecha Fin:</strong> {{ $empleadoActividad->fechafin }}</p>
                <p class="mb-2"><strong>Estado:</strong> {{ $empleadoActividad->estado }}</p>
                <div class="d-flex">
                    <a href="{{ route('empleadoactividad.edit', $empleadoActividad->idEmpActivid) }}" class="btn btn-warning mr-2">Editar</a>
                    <form action="{{ route('empleadoactividad.destroy', $empleadoActividad->idEmpActivid) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta EmpleadoActividad?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
