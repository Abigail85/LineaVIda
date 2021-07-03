<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

use App\factura;
use App\lote;
use App\proveedor;
use App\especificacionlote;
use Validator;
use PDF;

class FacturaController extends Controller
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
	 * Muestra el listado de facturas.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$facturas = factura::first()->paginate(10);
		$lotes = proveedor::all();
		$especificacioneslote = especificacionlote::all();
		return view('vista.facturas', compact('facturas', 'lotes'))->with('i', (request()->input('page', 1) - 1) * 10);
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
				'txtnumfactura' => 'required | max:15 | regex: /^[0-9]*$/',
				'selectidLote' => 'required | max:15 | regex: /^[0-9]*$/',
				'txtvalor' => 'required'
			],
			$messages
		);

		if ($validator->fails()) {
			return redirect()->route('facturas.index')
				->withErrors($validator)
				->withInput();
		}


		$operacion = $request->operacion;

		if ($operacion == 'crear') {
			if ( factura::where('numFactura', '=', $request->txtnumfactura)->count()>0) {
				$msg = 'Error: No se pudo crear la factura por que el número de factura ya existe';
				return redirect()->route('facturas.index')
			->with('error',$msg);
			 }
		}
// var_dump($request->txtnumfactura);
//  die();
		factura::updateOrCreate(
			['numFactura' => $request->txtnumfactura],
			[
				
				'idLote' => $request->txtidLote,
				'valor' => $request->txtvalor
			]
		);


		if ($operacion == 'crear')
			$msg = 'Factura creada exitosamente.';
		else if ($operacion == 'editar')
			$msg = 'Factura actualizada exitosamente';
		return redirect()->route('facturas.index')->with('success', $msg);
	}

	/**
	 * Muestra el factura especificado.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */

	public function show($id)
	{
		$where = array('numFactura' => $id);
		$factura = factura::where($where)->first();
		return Response::json($factura);
	}
	/**
	 * Muestra los datos en el form for para editar el proveedor especificado.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */

	public function edit($id)
	{
		$where = array('numFactura' => $id);
		$factura = factura::where($where)->first();
		return Response::json($factura);
	}



	public function eliminar(Request $request)
	{

		$fact = factura::where('numFactura', $request->txtniteliminar)->delete();

		$msg = 'Factura eliminada exitosamente.';

		return redirect()->route('facturas.index')->with('success', $msg);
		//return Response::json($prov);
	}

	public function pdf($id){
		$where= array('idLote'=>$id);
		$lote = lote::where($where)->first();
		$especificaciones = especificacionlote::where($where)->get();
		      // retreive all records from db
			 // $data = Employee::all();

			  // share data to view
			  view()->share('lote',$lote);
			  view()->share('especificaciones',$especificaciones);
			  $pdf = PDF::loadView('vista/pdf/facturapdf', [$lote,$especificaciones])->setpaper('a3', 'landscape');
		
			  // download PDF file with download method
			  return $pdf->download('factura.pdf');

	}

	public function facturahtml($id){
		$where= array('idLote'=>$id);
		$lote = lote::where($where)->first();
		$especificaciones = especificacionlote::where($where)->get();
		
		return view('vista/pdf/facturapdf')->with(['lote'=>$lote,'especificaciones'=>$especificaciones]);
		
	}
}
