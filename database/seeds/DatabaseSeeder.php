<?php

use Illuminate\Database\Seeder;
use creaBuenosAires\User;
use creaBuenosAires\Titulo;
use creaBuenosAires\Interes;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(User::class, 10)->create();
        // factory(Titulo::class, 25)->create();
        factory(Interes::class, 20)->create();
    }
}
