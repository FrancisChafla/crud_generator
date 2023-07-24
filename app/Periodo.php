<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $idnombre
 * @property $fechainicio
 * @property $fechafin
 * @property $usuariomodifica
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleadoscarrera[] $empleadoscarreras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'idnombre' => 'required',
		'fechainicio' => 'required',
		'fechafin' => 'required',
		'usuariomodifica' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idnombre','fechainicio','fechafin','usuariomodifica','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoscarreras()
    {
        return $this->hasMany('App\Empleadoscarrera', 'id_periodo', 'id');
    }
    

}
