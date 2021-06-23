<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = "color";
    protected $primaryKey = "idColor";
    public $timestamps = true;

    protected $fillable = [
        'idColor',
        'color'

    ];

    public function especificacionlote()
    {
        return $this->belongsTo('especificacionlote', 'idColor', 'idColor');
    }
}
