<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Titulo;

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
        factory(Titulo::class, 25)->create();
    }
}
