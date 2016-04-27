<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombre'=>'Pancito',
            'precio'=>'300',
            'tipo'=>'amasado',
            'unidad'=>'kg',
        ]);
    }
}
