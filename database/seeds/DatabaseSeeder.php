<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductosSeeder::class);
        $this->call(TipoProductoSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
