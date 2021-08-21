<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('users')->insert([
           'name'=>'vashu',
           'email'=>'vashu@gmail.com',
           'password'=>Hash::make('vashu123'),
        ]);*/

        /*foreach (range(1,10) as $value){
            DB::table('users')->insert([
                'name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com',
                'password'=>Hash::make('vashu123'),
            ]);
        }*/

        $faker = Faker::create();
        foreach (range(1,2) as $value){
            DB::table('users')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->unique()->safeEmail,
                'password'=>Hash::make('user123'),
            ]);
        }
    }
}
