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
            'fname' => 'admin',
            'password' => bcrypt('admin'),
            'email' => 'admin@gmail.com',
            'admin' => 1,
        ]);

        App\User::create([
            'fname' => 'Willy',
            'lname' => 'Hassan',
            'idno' => '31778774',
            'phone' => '0717506477',
            'county' => 'Meru',
            'country' => 'Kenya',
            'marital_status' => 'married',
            'password' => bcrypt('user'),
            'email' => 'willy@gmail.com',
        ]);

        App\User::create([
            'fname' => 'Sammy',
            'lname' => 'Rixton',
            'idno' => '31778004',
            'phone' => '0717506344',
            'county' => 'Bungoma',
            'country' => 'Kenya',
            'marital_status' => 'Single',
            'password' => bcrypt('user'),
            'email' => 'sammy@gmail.com',
        ]);

        App\User::create([
            'fname' => 'Muel',
            'lname' => 'Sam',
            'idno' => '45778774',
            'phone' => '0756506477',
            'county' => 'Kitui',
            'country' => 'Kenya',
            'marital_status' => 'divorced',
            'password' => bcrypt('user'),
            'email' => 'muel@gmail.com',
        ]);
    }
}
