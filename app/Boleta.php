<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $fillable = [
        'cajero',
    ];

    public function productos()
    {
        return $this->belongsToMany('App\Producto')->withPivot('cantidad');
    }

    public function getTotalAttribute(){
        $total=0;
        foreach ($this->productos as $producto)
        {
            $total += $producto->precio * $producto->pivot->cantidad;
        }
        return $total;
    }

}
