<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lote;
use App\proveedor;

class LoteController extends Controller
{
  /*        'idLote',
    'idNitProveedor',
    'fechaIngresoLote',
    'descripcionLotes',
    'cantidadTotalLotes'
*/
     /**
	* Muestra el listado de lotes.
	*
	* @return \Illuminate\Http\Response
	*/
    public function index(){
        $lotes = lote::first()->paginate(10);
        $proveedores = proveedor::all();
        return view('vista.lotes',compact('lotes','proveedores'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
/**
	* Almacena un nuevo proveedor en la base de datos.
	*
	* @param \Illuminate\Http\Request $request
	* @return \Illuminate\Http\Response
	*/

	public function store(Request $request)
	{

		$messages = [
			'required'    => 'El campo :attribute es obligatorio.',
			'max'    => 'El campo :attribute no debe tener mas de :max caracteres.: :input',
			'numeric'    => 'El campo :attribute debe ser un número.',
			'regex'    => 'El campo :attribute debe ser un número.: :input',
		];

		$validator = Validator::make($request->all(), 
		[
        'txtnit' => 'required | max:15 | regex: /^[0-9]*$/',
		'txtNombre' => 'required',
		'txtDireccion' => 'required',
		'txtTelefono' => 'required | numeric',
		'txtNombrePersonaCargo' => 'required',


/*
idNitProveedor
Valor
Fecha de Ingreso
Fecha de Inicio
Fecha de Entrega
Cantidad por color y talla
Cantidad total
Descripción
Lote en:
Talla:
Color 
*/

        ],$messages);

        if ($validator->fails()) {
            return redirect()->route('lotes.index')
			->withErrors($validator)
			->withInput();
                        
        }


		$provId = $request->txtnit;
        $operacion = $request->operacion;

		if ($operacion == 'crear') {
			if ( proveedor::where('idNitProveedor', '=', $provId)->count()>0) {
				$msg = 'Error: No se pudo crear el proveedor por que el nit ya existe';
				return redirect()->route('lotes.index')
			->with('error',$msg);
			 }
		}

		proveedor::updateOrCreate(['idNitProveedor' => $provId],['nombreProveedor' => $request->txtNombre, 'telefono' => $request->txtTelefono,'direccion'=>$request->txtDireccion, 'encargadoProveedor'=>$request->txtNombrePersonaCargo]);
		if($operacion=='crear')
			$msg = 'Proveedor creado exitosamente.';
		else if($operacion=='editar')
			$msg = 'Proveedor actualizado exitosamente';
		return redirect()->route('lotes.index')->with('success',$msg);
	}

	/**
	* Muestra el proveedor especificado.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function show($id)
	{
        $where = array('idNitProveedor' => $id);
		$proveedor = proveedor::where($where)->first();
		return Response::json($proveedor);
	}
	/**
	* Muestra los datos en el form for para editar el proveedor especificado.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	
	public function edit($id)
	{
		$where = array('idNitProveedor' => $id);
		$proveedor = proveedor::where($where)->first();
		return Response::json($proveedor);
	}

    
	/**
	* Elimina el proveedor especificado de la tabla proveedor.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function destroy($id)
	{
		$prov = proveedor::where('idNitProveedor',$id)->delete();
		return Response::json($prov);
	}

    
	public function eliminar(Request $request)
	{

		$prov = proveedor::where('idNitProveedor',$request->txtniteliminar)->delete();
        
			$msg = 'Proveedor eliminado exitosamente.';
		
		return redirect()->route('lotes.index')->with('success',$msg);
		//return Response::json($prov);
	}
}
