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
            'name' => 'John',
            'gender' => 'male',
            'dob' => '04.12.2009',
            'guardian' => 'Willy',
            'county' => 'Kitui',
            'photo' => asset('images/avatar.png'),
        ]);

        App\Child::create([
            'name' => 'Mercy',
            'gender' => 'female',
            'dob' => '05.11.2009',
            'guardian' => 'Charles',
            'county' => 'Meru',
            'photo' => asset('images/avatar.png'),
        ]);

        App\Child::create([
            'name' => 'Joy',
            'gender' => 'female',
            'dob' => '12.12.2005',
            'guardian' => 'Martin',
            'county' => 'Nairobi',
            'photo' => asset('images/avatar.png'),
        ]);
    }
}
