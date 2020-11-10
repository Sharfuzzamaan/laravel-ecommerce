<?php

namespace Database\Seeders;

use App\Models\ProductsAttribute;
use Illuminate\Database\Seeder;

class ProductsAttributesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productAttributesRecords = [

            ['id'=> 1, 'product_id'=> 1, 'size'=> 'Small', 'price'=> 1200, 'stock'=> 10, 'sku'=>'BT001-S', 'status'=> 1],
            ['id'=> 2, 'product_id'=> 1, 'size'=> 'medium', 'price'=> 1300, 'stock'=> 20, 'sku'=>'BT001-M', 'status'=> 1],
            ['id'=> 3, 'product_id'=> 1, 'size'=> 'Large', 'price'=> 1400, 'stock'=> 15, 'sku'=>'BT001-L', 'status'=> 1],

        ];
        ProductsAttribute::insert($productAttributesRecords);
    }
}
