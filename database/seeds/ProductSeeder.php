<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,5) as $value){
            DB::table('products')->insert([
                'title'=>'Product'.$value,
                'description'=>'this is the product description',
                'image'=>'',
                'user_id'=>2,
            ]);
        }
    }
}
