<?php

namespace App\Http\Controllers;

use App\Empleadoscarrera;
use App\Empleado;
use App\Carrera;
use App\Periodo;
use App\Usuario;
use Illuminate\Http\Request;

/**
 * Class EmpleadoscarreraController
 * @package App\Http\Controllers
 */
class EmpleadoscarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleadoscarreras = Empleadoscarrera::paginate();

        return view('empleadoscarrera.index', compact('empleadoscarreras'))
            ->with('i', (request()->input('page', 1) - 1) * $empleadoscarreras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleadoscarrera = new Empleadoscarrera();

        // Obtener solo empleados activados
        $empleados = Empleado::where('estado', 'Activado')->pluck('nombres', 'id');
        
        // Obtener solo carreras activadas
        $carreras = Carrera::where('estado', 'Activado')->pluck('nombrecarrera', 'id');
        
        // Obtener solo periodos activados
        $periodos = Periodo::where('estado', 'Activado')->pluck('idnombre', 'id');
        
        $usuarios = Usuario::pluck('nombre', 'id');
        return view('empleadoscarrera.create', compact('empleadoscarrera', 'empleados', 'carreras', 'periodos', 'usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Empleadoscarrera::$rules);

        $empleadoscarrera = Empleadoscarrera::create($request->all());

        return redirect()->route('empleadoscarreras.index')
            ->with('success', 'Empleadoscarrera created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleadoscarrera = Empleadoscarrera::find($id);

        return view('empleadoscarrera.show', compact('empleadoscarrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleadoscarrera = Empleadoscarrera::find($id);
        $empleados = Empleado::pluck('nombres','id');
        $carreras = Carrera::pluck('nombrecarrera','id');
        $periodos = Periodo::pluck('idnombre','id');
        $usuarios = Usuario::pluck('nombre', 'id');
        return view('empleadoscarrera.edit', compact('empleadoscarrera','empleados','carreras','periodos','usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Empleadoscarrera $empleadoscarrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleadoscarrera $empleadoscarrera)
    {
        request()->validate(Empleadoscarrera::$rules);

        $empleadoscarrera->update($request->all());

        return redirect()->route('empleadoscarreras.index')
            ->with('success', 'Empleadoscarrera updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleadoscarrera = Empleadoscarrera::find($id)->delete();

        return redirect()->route('empleadoscarreras.index')
            ->with('success', 'Empleadoscarrera deleted successfully');
    }
}
