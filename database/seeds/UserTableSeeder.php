<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        User::truncate();
        $faker = \Faker\Factory::create();
// Crear artículos ficticios en la tabla
        for ($i = 0; $i < 20; $i++) {
            User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'document' => $faker->title,
            ]);
        }
    }
}
