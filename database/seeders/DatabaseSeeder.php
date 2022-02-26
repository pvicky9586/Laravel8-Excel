<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate(); //vaciar tabla
        DB::table('users')->truncate(); //vaciar tabla

       //\App\Models\User::factory(10)->create();
        $this->call(ProductTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
