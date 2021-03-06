<?php

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
        App\User::create([
            'name' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@gmail.com',
            'admin' => 1,
        ]);

        App\User::create([
            'name' => 'Willy',
            'password' => bcrypt('user'),
            'email' => 'willy@gmail.com',
        ]);

        App\User::create([
            'name' => 'Sammy',
            'password' => bcrypt('user'),
            'email' => 'sammy@gmail.com',
        ]);

        App\User::create([
            'name' => 'Muel',
            'password' => bcrypt('user'),
            'email' => 'muel@gmail.com',
        ]);
    }
}
