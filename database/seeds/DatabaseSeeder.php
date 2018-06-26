<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Call seeders - e.g. $this->call(UsersTableSeeder::class);
        $this->call([
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
        ]);
    }
}
