<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\proveedor;
use App\especificacionlote;
class lote extends Model
{
    
    protected $table="lotes";
    protected $primaryKey = "idLote";
    public $timestamps = false;

    protected $fillable = [
        'idLote',
        'idNitProveedor',
        'fechaIngresoLote',
        'fechaInicioLote',
        'fechaEntregaLote',
        'descripcionLotes',
        'cantidadTotalLotes'
    ];

    public function proveedor()
    {
        return $this->belongsTo('App\proveedor','idNitProveedor','idNitProveedor');
    }
    public function especificaciones()
    {
        return $this->hasMany('App\especificacionlote','idLote','idLotes');
    }
}
