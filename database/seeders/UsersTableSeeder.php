<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str as Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i<10; $i++){
            \DB::table('users')->insert(array(
                'name'  => $faker->name,
                'email' => $faker->unique()->safeEmail(),
	            'email_verified_at' => now(),
	            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
	            'remember_token' => Str::random(10),
            ));
        }
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

}