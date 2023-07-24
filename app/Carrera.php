<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrera
 *
 * @property $id
 * @property $nombrecarrera
 * @property $estado
 * @property $facultad
 * @property $usuariomodifica
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleadoscarrera[] $empleadoscarreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrera extends Model
{
    
    static $rules = [
		'nombrecarrera' => 'required',
		'estado' => 'required',
		'facultad' => 'required',
		'usuariomodifica' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombrecarrera','estado','facultad','usuariomodifica'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoscarreras()
    {
        return $this->hasMany('App\Empleadoscarrera', 'id_carrera', 'id');
    }
    

}
