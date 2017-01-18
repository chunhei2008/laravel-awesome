<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at' => $faker->dateTime,
            'updated_at' => $faker->dateTime,
            'deleted_at' => $faker->dateTime,
            'name'       => $faker->name,
            'gender'     => $faker->randomElements(['m', 'f']),
            'type'       => $faker->randomDigit,
        ]);
    }
}
