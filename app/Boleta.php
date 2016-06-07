<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model
{
    protected $fillable = [
        'cajero',
    ];

    public function productos(){
        return $this->belongsToMany('App\Producto')->withPivot('cantidad');
    }
}
