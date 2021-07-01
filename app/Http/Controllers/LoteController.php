<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\lote;
use App\proveedor;
use Validator;

class LoteController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Muestra el listado de lotes.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$lotes = lote::first()->paginate(10);
		$proveedores = proveedor::all();
		return view('vista.lotes', compact('lotes', 'proveedores'))->with('i', (request()->input('page', 1) - 1) * 10);
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

		$validator = Validator::make(
			$request->all(),
			[
				'txtidlote' => 'required | max:15 | regex: /^[0-9]*$/',
				'txtnit' => 'required | max:15 | regex: /^[0-9]*$/',
				'selectproveedor' => 'required',
				'txtfechaingreso' => 'required',
				'txtfechainicio' => 'required',
				'txtfechaentrega' => 'required',
				'txtdescripcion' => 'required',
				'selectloteen' => 'required'
			],
			$messages
		);

		if ($validator->fails()) {
			return redirect()->route('lotes.index')
				->withErrors($validator)
				->withInput();
		}


		$provId = $request->txtnit;
		$operacion = $request->operacion;

		if ($operacion == 'crear') {
			if ( lote::where('idLote', '=', $request->txtidlote)->count()>0) {
				$msg = 'Error: No se pudo crear el lote por que el id ya existe';
				return redirect()->route('lotes.index')
			->with('error',$msg);
			 }
		}
// var_dump($request->txtidlote);
//  die();
		lote::updateOrCreate(
			['idLote' => $request->txtidlote],
			[
				
				'idNitProveedor' => $request->txtnit,
				'fechaIngresoLote' => $request->txtfechaingreso,
				'fechaInicioLote' => $request->txtfechainicio,
				'fechaEntregaLote' => $request->txtfechaentrega,
				'descripcionLotes' => $request->txtdescripcion,
				'loteen' => $request->selectloteen
			]
		);


		if ($operacion == 'crear')
			$msg = 'Lote creado exitosamente.';
		else if ($operacion == 'editar')
			$msg = 'Lote actualizado exitosamente';
		return redirect()->route('lotes.index')->with('success', $msg);
	}

	/**
	 * Muestra el lote especificado.
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
		$where = array('idLote' => $id);
		$lote = lote::where($where)->first();
		return Response::json($lote);
	}



	public function eliminar(Request $request)
	{

		$prov = proveedor::where('idNitProveedor', $request->txtniteliminar)->delete();

		$msg = 'Proveedor eliminado exitosamente.';

		return redirect()->route('lotes.index')->with('success', $msg);
		//return Response::json($prov);
	}
}
