<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmpleadoActividadController extends Controller
{
    protected $apiBaseUrl;

    public function __construct()
    {
        // Define la URL base de la API .NET Core
        $this->apiBaseUrl = 'https://localhost:44398/api/';
    }

    public function index()
    {
        // Realiza una solicitud GET para obtener todas las EmpleadoActividad
        $client = new Client([
            'verify' => false, // Deshabilitar la verificación del certificado (SOLO PARA DESARROLLO, NO RECOMENDADO EN PRODUCCIÓN)
        ]);

        $response = $client->get($this->apiBaseUrl . 'EmpleadoActividad');
        $empleadoActividades = json_decode($response->getBody()->getContents());

        return view('empleadoactividad.index', compact('empleadoActividades'));
    }

    public function create()
    {
        return view('empleadoactividad.create');
    }

    public function store(Request $request)
    {
        $client = new Client([
            'verify' => false, // Deshabilitar la verificación del certificado (SOLO PARA DESARROLLO, NO RECOMENDADO EN PRODUCCIÓN)
        ]);

        $response = $client->post($this->apiBaseUrl . 'EmpleadoActividad', [
            'form_params' => $request->all(),
        ]);

        return redirect()->route('empleadoactividad.index')
            ->with('success', 'EmpleadoActividad creada exitosamente.');
    }

    public function show($id)
    {
        $client = new Client([
            'verify' => false, // Deshabilitar la verificación del certificado (SOLO PARA DESARROLLO, NO RECOMENDADO EN PRODUCCIÓN)
        ]);

        $response = $client->get($this->apiBaseUrl . 'EmpleadoActividad/' . $id);
        $empleadoActividad = json_decode($response->getBody()->getContents());

        return view('empleadoactividad.show', compact('empleadoActividad'));
    }

    public function edit($id)
    {
        $client = new Client([
            'verify' => false, // Deshabilitar la verificación del certificado (SOLO PARA DESARROLLO, NO RECOMENDADO EN PRODUCCIÓN)
        ]);

        $response = $client->get($this->apiBaseUrl . 'EmpleadoActividad/' . $id);
        $empleadoActividad = json_decode($response->getBody()->getContents());

        return view('empleadoactividad.edit', compact('empleadoActividad'));
    }

    public function update(Request $request, $id)
    {
        $client = new Client([
            'verify' => false, // Deshabilitar la verificación del certificado (SOLO PARA DESARROLLO, NO RECOMENDADO EN PRODUCCIÓN)
        ]);

        $response = $client->put($this->apiBaseUrl . 'EmpleadoActividad/' . $id, [
            'form_params' => $request->all(),
        ]);

        return redirect()->route('empleadoactividad.index')
            ->with('success', 'EmpleadoActividad actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $client = new Client([
            'verify' => false, // Deshabilitar la verificación del certificado (SOLO PARA DESARROLLO, NO RECOMENDADO EN PRODUCCIÓN)
        ]);

        $response = $client->delete($this->apiBaseUrl . 'EmpleadoActividad/' . $id);

        return redirect()->route('empleadoactividad.index')
            ->with('success', 'EmpleadoActividad eliminada exitosamente.');
    }
}
