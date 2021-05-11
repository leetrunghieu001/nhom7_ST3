<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            ['brandName'=>'Adidas'],
            ['brandName'=>'Gucci'],
            ['brandName'=>'Supreme'],
            ['brandName'=>'Hermes'],
            ['brandName'=>'Calvin Klein'],
            ['brandName'=>'Chanel'],
            ['brandName'=>'Nike'],
            ['brandName'=>'Prada']
         ]);
    }
}
