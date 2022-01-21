<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<10; $i++){
            DB::table('products')->insert([
                'name'=>Str::random(10),
                'count'=>mt_rand(0,20),
                'price'=>mt_rand(1,10)*100,
                'views'=>mt_rand(1,10),
                'description'=>Str::random(30),
            ]);

        }
        DB::table('products')->insert([
            'name' => Str::random(10),
            'count' => mt_rand(0,20),
            'price' => mt_rand(1,10) * 100,
            'description' => Str::random(30),
        ]);
    } 
}