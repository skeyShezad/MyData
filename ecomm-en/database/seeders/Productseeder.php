<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['name'=> 'OPPO',
            "price"=> "20000",
            "description" => "smart phone with 8GB ram much more feature",
            "catagory" => "mobile",
            "gallery" => ''
        ],

            ['name'=> 'OPPO PRO',
            "price"=> "10000",
            "description" => "smart phone with 12GB ram much more feature",
            "catagory" => "mobile",
            "gallery" => ''
    ],
    ['name'=> 'Iphone',
    "price"=> "100000",
    "description" => "smart phone with 12GB ram much more feature",
    "catagory" => "mobile",
    "gallery" => ''
    ]

        ]);
    }
}
