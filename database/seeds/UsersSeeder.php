<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'email' => 'admin@system.com',
            'rut' => '11111111-1',
            'nombre' => 'Juan Perez',
            'password' => bcrypt('secret'),
        ]);
    }
}
