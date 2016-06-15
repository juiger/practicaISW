<?php

use Illuminate\Database\Seeder;
use App\TipoProducto;

class TipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoProducto::create(['nombre'=>'Amasandería']);
        TipoProducto::create(['nombre'=>'Rotisería']);
        TipoProducto::create(['nombre'=>'Dulces']);
        TipoProducto::create(['nombre'=>'Misc']);
    }
}
