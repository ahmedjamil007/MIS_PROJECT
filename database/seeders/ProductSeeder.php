<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products=collect([
            [
                'name'=>'Chips',
                'quantity'=>'89',
                'price'=>'2500'
            ],
            [
                'name'=>'Cake',
                'quantity'=>'15',
                'price'=>'1500'
            ],
            [
                'name'=>'Biscuts',
                'quantity'=>'5',
                'price'=>'250'
            ]
        ]);
        $products->each(function($product){
            product::insert($product);
        });
    }
}
