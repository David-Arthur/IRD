<?php

use Illuminate\Database\Seeder;
use App\ProductType;
use App\Product;
use App\ProductImage;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $securityType = ProductType::create([
            'name' => 'Security',
            'slug' => 'security',
            'description' => 'Security Doors',
        ]);

        $phoenixDoor = Product::create([
        	'name' => 'Phoenix',
        	'type_id' => $securityType->id,
        	'description' => 'Phoenix Door',
        ]);

        $phoenixImage = ProductImage::create([
        	'file_name' => 'images/door.jpg',
        	'product_id' => $phoenixDoor->id,
        ]);
    }
}
