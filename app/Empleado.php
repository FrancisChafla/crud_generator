<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empleado
 *
 * @property $id
 * @property $codigoempleado
 * @property $apellidos
 * @property $nombres
 * @property $usuario_id
 * @property $fechaingreso
 * @property $usuariomodifica
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleadoscarrera[] $empleadoscarreras
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empleado extends Model
{
    
    static $rules = [
		'codigoempleado' => 'required',
		'apellidos' => 'required',
		'nombres' => 'required',
		'usuario_id' => 'required',
		'fechaingreso' => 'required',
		'usuariomodifica' => 'required',
		'estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigoempleado','apellidos','nombres','usuario_id','fechaingreso','usuariomodifica','estado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empleadoscarreras()
    {
        return $this->hasMany('App\Empleadoscarrera', 'id_empleado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Usuario', 'id', 'usuario_id');
    }
    

}
