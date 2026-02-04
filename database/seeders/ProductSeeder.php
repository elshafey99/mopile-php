<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // Electronics
            [
                'category_id' => 1,
                'name' => 'Smartphone X Pro',
                'slug' => 'smartphone-x-pro',
                'description' => 'Latest flagship smartphone with amazing features',
                'price' => 799.99,
                'sale_price' => 699.99,
                'stock_quantity' => 50,
                'sku' => 'ELEC-001',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Wireless Headphones',
                'slug' => 'wireless-headphones',
                'description' => 'Noise-canceling wireless headphones',
                'price' => 199.99,
                'stock_quantity' => 100,
                'sku' => 'ELEC-002',
                'is_featured' => true,
                'is_active' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Laptop Pro 15"',
                'slug' => 'laptop-pro-15',
                'description' => 'High-performance laptop for professionals',
                'price' => 1299.99,
                'sale_price' => 1199.99,
                'stock_quantity' => 30,
                'sku' => 'ELEC-003',
                'is_featured' => true,
                'is_active' => true,
            ],

            // Fashion
            [
                'category_id' => 2,
                'name' => 'Classic T-Shirt',
                'slug' => 'classic-t-shirt',
                'description' => 'Comfortable cotton t-shirt',
                'price' => 29.99,
                'stock_quantity' => 200,
                'sku' => 'FASH-001',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Denim Jeans',
                'slug' => 'denim-jeans',
                'description' => 'Classic blue denim jeans',
                'price' => 59.99,
                'sale_price' => 49.99,
                'stock_quantity' => 150,
                'sku' => 'FASH-002',
                'is_featured' => true,
                'is_active' => true,
            ],

            // Home & Kitchen
            [
                'category_id' => 3,
                'name' => 'Coffee Maker',
                'slug' => 'coffee-maker',
                'description' => 'Automatic coffee maker with timer',
                'price' => 89.99,
                'stock_quantity' => 75,
                'sku' => 'HOME-001',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'Blender Pro',
                'slug' => 'blender-pro',
                'description' => 'Professional blender for smoothies',
                'price' => 129.99,
                'sale_price' => 99.99,
                'stock_quantity' => 60,
                'sku' => 'HOME-002',
                'is_featured' => true,
                'is_active' => true,
            ],

            // Books
            [
                'category_id' => 4,
                'name' => 'Learn Laravel',
                'slug' => 'learn-laravel',
                'description' => 'Complete guide to Laravel development',
                'price' => 39.99,
                'stock_quantity' => 100,
                'sku' => 'BOOK-001',
                'is_featured' => true,
                'is_active' => true,
            ],

            // Sports
            [
                'category_id' => 5,
                'name' => 'Yoga Mat',
                'slug' => 'yoga-mat',
                'description' => 'Non-slip yoga mat for exercises',
                'price' => 24.99,
                'stock_quantity' => 120,
                'sku' => 'SPRT-001',
                'is_featured' => false,
                'is_active' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Dumbbells Set',
                'slug' => 'dumbbells-set',
                'description' => 'Adjustable dumbbells set',
                'price' => 149.99,
                'sale_price' => 129.99,
                'stock_quantity' => 45,
                'sku' => 'SPRT-002',
                'is_featured' => true,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
