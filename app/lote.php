<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\proveedor;
use App\especificacionlote;
class lote extends Model
{

    protected $table="lote";
    protected $primaryKey = "idLote";
    public $timestamps = false;

    protected $fillable = [
        'idLote',
        'idNitProveedor',
        'fechaIngresoLote',
        'fechaInicioLote',
        'fechaEntregaLote',
        'descripcionLotes',
        'loteen'
    ];

    public function proveedor()
    {
        return $this->belongsTo('App\proveedor','idNitProveedor','idNitProveedor');
    }
    public function especificacionlote()
    {
        return $this->hasMany('App\especificacionlote','idLote','idLote');
    }
}
