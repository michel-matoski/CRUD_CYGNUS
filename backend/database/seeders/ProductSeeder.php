<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Product::create([
        'name' => 'Morango',
        'price' => 19.99,
        'description' => 'Fruta'
    ]);
}

}
