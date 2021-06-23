<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    protected $table = "factura";
    protected $primaryKey = "nroFactura";
    public $timestamps = false;

    		
    protected $fillable = [
        'nroFactura',
        'idLote',
        'valor'

    ];

    public function lote()
    {
        return $this->belongsTo('lote', 'idLote', 'idLote');
    }
}
