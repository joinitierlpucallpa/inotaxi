<?php

namespace App;
use App\TipoUsuario;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // Nombre de la tabla en MySQL.
	protected $table='usuarios';

	// Eloquent asume que cada tabla tiene una clave primaria con una columna llamada id.
	// Si éste no fuera el caso entonces hay que indicar cuál es nuestra clave primaria en la tabla:
	protected $primaryKey = 'idUsuario';

	// Atributos que se pueden asignar de manera masiva.
	protected $fillable = array('idTipUsu','idPersona','contrasenia');
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at']; 
	public $timestamps = false;

	public function tipousuario()
	{
	    return $this->belongsTo(TipoUsuario::class,"idTipUsu");
	}
}
