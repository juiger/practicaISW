<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = [
        'nombre',
        'precio',
        'unidad',
        'tipo_producto_id'
    ];

    public function tipo_producto()
    {
        return $this->belongsTo('App\TipoProducto');
    }
    
}
