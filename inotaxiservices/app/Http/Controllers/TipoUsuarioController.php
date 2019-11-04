<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoUsuario;

class TipoUsuarioController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Devolverá todos los fabricantes.
		return response()->json(['status'=>'ok','data'=>TipoUsuario::all()], 200);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// 
		return "Se muestra formulario para crear un fabricante.";


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$tipousuario = new TipoUsuario;
    	$tipousuario->nombretipo= $request->nombretipo;    	
    	$tipousuario->save();
    	return $tipousuario;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// return "Se muestra Fabricante con id: $id";
		// Buscamos un fabricante por el id.
		$tipousuario=TipoUsuario::find($id);
		//$tipousuario = TipoUsuario::where('id', 1)->get();

		// Si no existe ese fabricante devolvemos un error.
		if (!$tipousuario)
		{
			// Se devuelve un array errors con los errores encontrados y cabecera HTTP 404.
			// En code podríamos indicar un código de error personalizado de nuestra aplicación si lo deseamos.
			return response()->json(['errors'=>array(['code'=>404,'message'=>'No se encuentra un fabricante con ese código.'])],404);
		}

		return response()->json(['status'=>'ok','data'=>$tipousuario],200);
	}

	

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		return "Se muestra formulario para editar Fabricante con id: $id";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$tipousuario=TipoUsuario::findOrFail($id);
    	$tipousuario->update([

    		'idTipUsu'=>$request->idTipUsu,
    		'nombretipo'=>$request->nombretipo
    	]);
    	return $tipousuario;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
