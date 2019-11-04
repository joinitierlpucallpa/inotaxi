<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    // Nombre de la tabla en MySQL.
	protected $table='tipo_usuarios';

	// Eloquent asume que cada tabla tiene una clave primaria con una columna llamada id.
	// Si éste no fuera el caso entonces hay que indicar cuál es nuestra clave primaria en la tabla:
	protected $primaryKey = 'idTipUsu';

	// Atributos que se pueden asignar de manera masiva.
	protected $fillable = array('nombretipo');
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at']; 
	public $timestamps = false;
}
