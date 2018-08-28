<?php

use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Child::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'gender' => 'male',
            'dob' => '04.12.2009',
            'guardian' => 'Willy',
            'county' => 'Kitui',
            'status' => 1,
            'image' => asset('images/avatar.png'),
        ]);

        App\Child::create([
            'fname' => 'Mercy',
            'lname' => 'Keys',
            'gender' => 'female',
            'dob' => '05.11.2009',
            'guardian' => 'Charles',
            'county' => 'Meru',
            'status' => 0,
            'image' => asset('images/avatar.png'),
        ]);

        App\Child::create([
            'fname' => 'Joy',
            'lname' => 'Guy',
            'gender' => 'female',
            'dob' => '12.12.2005',
            'guardian' => 'Martin',
            'county' => 'Nairobi',
            'status' => 1,
            'image' => asset('images/avatar.png'),
        ]);
    }
}
