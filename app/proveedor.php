<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\PseudoTypes\True_;

class proveedor extends Model
{
    protected $table="proveedor";
    protected $primaryKey = "idNitProveedor";
    public $timestamps = true;

    protected $fillable = [
	
'idNitProveedor',
'nombreProveedor',
'telefono',
'direccion',
'encargadoProveedor',
'created_at',
'updated_at'
    ];
    public function lotes()
    {
        return $this->hasMany('App\lote','idNitProveedor');
    }
}
