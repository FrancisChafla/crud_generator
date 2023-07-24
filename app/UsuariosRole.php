<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UsuariosRole
 *
 * @property $id
 * @property $usuario_id
 * @property $roles_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Role $role
 * @property Usuario $usuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class UsuariosRole extends Model
{
    
    static $rules = [
		'usuario_id' => 'required',
		'roles_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['usuario_id','roles_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne('App\Role', 'id', 'roles_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Usuario', 'id', 'usuario_id');
    }
    

}
