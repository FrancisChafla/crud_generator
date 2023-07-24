<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleadoscarrera
 *
 * @property $id
 * @property $id_empleado
 * @property $id_carrera
 * @property $id_periodo
 * @property $fecha
 * @property $usuariomodifica
 * @property $created_at
 * @property $updated_at
 *
 * @property Carrera $carrera
 * @property Empleado $empleado
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleadoscarrera extends Model
{
    
    static $rules = [
		'id_empleado' => 'required',
		'id_carrera' => 'required',
		'id_periodo' => 'required',
		'fecha' => 'required',
		'usuariomodifica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_empleado','id_carrera','id_periodo','fecha','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Carrera', 'id', 'id_carrera');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Empleado', 'id', 'id_empleado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Periodo', 'id', 'id_periodo');
    }
    

}
