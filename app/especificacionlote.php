<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Color;

class especificacionlote extends Model
{
    protected $table="especificacionlote";
    protected $primaryKey = "idEspecificacionLote";
    public $timestamps = false;
protected $fillable = [
   
    'idEspecificacionLote',
    'idLote',
    'idColor',
    'cantidadxxs',
    'cantidads',
    'cantidads',
    'cantidadm',
    'cantidadl',
    'cantidadxl',
    'cantidad2xl',
    'cantidad3xl',
    'cantidad'
];




public function lote(){
    return $this->belongsTo('App\lotes','idLote','idLote');
}

public function color(){
    return $this->hasOne('App\Color','idColor','idColor');
}


}
