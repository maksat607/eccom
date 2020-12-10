<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
            [
                [
            'name'=>'samsung tv',
            'price'=>'300',
            'description'=>'tv with 4gb ram',
        'category'=>"mobile",
        "gallery"=>"ww.samsung.com"
        ],
        [
            'name'=>'apple ',
            'price'=>'400',
            'description'=>'computer with 4gb ram',
        'category'=>"computer",
        "gallery"=>"ww.apple.com"
        ],
        [
            'name'=>'Nokia tablet',
            'price'=>'500',
            'description'=>'tablet with 4gb ram',
        'category'=>"mobile",
        "gallery"=>"ww.nokia.com"
        ]
    
             ] );
    }
}
