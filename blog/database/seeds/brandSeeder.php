<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class brandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['typeName'=>'Áo sơ mi'],
            ['typeName'=>'Áo phông'],
            ['typeName'=>'Áo khoác'],
            ['typeName'=>'Dép'],
            ['typeName'=>'Giầy'],
            ['typeName'=>'Quần tây'],
            ['typeName'=>'Quần jean'],
            ['typeName'=>'Quần short'],
            ['typeName'=>'Nón']
         ]);
    }
}
