<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i<30; $i++){
            \DB::table('products')->insert(array(
                'name'         => $faker->name,
                'description'  => $faker->paragraph(),
                'serial'       => $faker->numberBetween(54826571,95653254),
                'quantity'     => $faker->numberBetween(0,1000)
            ));
        }
    }
}
