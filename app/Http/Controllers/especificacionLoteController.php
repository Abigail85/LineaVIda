<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\especificacionlote;
use App\lote;
use App\color;
use Validator;



class especificacionLoteController extends Controller
{
     /**
	* Muestra el listado de especificacionlote.
	*
	* @return \Illuminate\Http\Response
	*/
    public function index(){
        $especificacionlotes = especificacionlote::first()->paginate(10);
        $lotes = lote::all();
        $colores = color::all();

        return view('vista.especificacionlote',compact('especificacionlotes','lotes','colores'))->with('i', (request()->input('page', 1) - 1) * 10);
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
        'idEspecificacionLotetxt' => 'required | max:15 | regex: /^[0-9]*$/',
		'idLoteselect' => 'required',
		'Colorselect' => 'required',
		'cantidadXXStxt' => 'required | numeric',
		'cantidadXStxt' => 'required | numeric',
		'cantidadStxt' => 'required | numeric',
		'cantidadMtxt' => 'required | numeric',
		'cantidadLtxt' => 'required | numeric',
		'cantidadXLtxt' => 'required | numeric',
		'cantidad2XLtxt' => 'required | numeric',
		'cantidad3XLtxt' => 'required | numeric'
        ],$messages);

        if ($validator->fails()) {
            return redirect()->route('especificacionlotes.index')
			->withErrors($validator)
			->withInput();
                        
        }


		$idespecificacion = $request->idEspecificacionLotetxt;
        $operacion = $request->operacion;

		
		if ($operacion == 'crear') {
			if (especificacionlote::where('idEspecificacionLote', '=', $idespecificacion)->count()>0) {
				$msg = 'Error: No se pudo crear la especificación por que el id de especificación ya existe';
				return redirect()->route('especificacionlotes.index')
			->with('error',$msg);
			 }
		}

		especificacionlote::updateOrCreate(['idEspecificacionLote' => $idespecificacion],
		[
			'idEspecificacionLote'=> $request->idEspecificacionLotetxt,
			'idLote'=> $request->idLoteselect,
			'idColor'=> $request->Colorselect,
			'cantidadxxs'=> $request->cantidadXXStxt,
			'cantidadxs'=> $request->cantidadXStxt,
			'cantidads'=> $request->cantidadStxt,
			'cantidadm'=> $request->cantidadMtxt,
			'cantidadl'=> $request->cantidadLtxt,
			'cantidadxl'=> $request->cantidadXLtxt,
			'cantidad2xl'=> $request->cantidad2XLtxt,
			'cantidad3xl'=> $request->cantidad3XLtxt,
		]);
		
		if($operacion=='crear')
			$msg = 'Especificación creada exitosamente.';
		else if($operacion=='editar')
			$msg = 'Especificación actualizada exitosamente';
		return redirect()->route('especificacionlotes.index')->with('success',$msg);
	}

	/**
	* Muestra el proveedor especificado.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function show($id)
	{
        $where = array('idEspecificacionLote' => $id);
		$especificacion = especificacionlote::where($where)->first();
		return Response::json($especificacion);
	}
	/**
	* Muestra los datos en el form for para editar el proveedor especificado.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	
	public function edit($id)
	{
		$where = array('idEspecificacionLote' => $id);
		$especificacionlote = especificacionlote::where($where)->first();
		return Response::json($especificacionlote);
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

		$prov = especificacionlote::where('idEspecificacionLote',$request->txtidespecificacioneliminar)->delete();
        
			$msg = 'Especificación eliminada exitosamente.';
		
		return redirect()->route('especificacionlotes.index')->with('success',$msg);
		//return Response::json($prov);
	}
}
