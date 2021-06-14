<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class talla extends Model
{
    protected $table = "talla";
    protected $primaryKey = "idTalla";
    public $timestamps = true;

    protected $fillable = [
        'talla'

    ];

    public function especificacionlote()
    {
        return $this->belongsTo('especificacionlote', 'idTalla', 'idTalla');
    }
}
