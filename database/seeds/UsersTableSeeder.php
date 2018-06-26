<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Test with just one user - John Doe
        User::create([
            'name' => 'John Doe',
            'email' => 'demo@demo.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
