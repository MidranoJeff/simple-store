<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin first
        $this->call(AdminSeeder::class);

        // 2. Regular users
        User::factory(10)->create();

        // 3. Categories
        Category::factory(5)->create();

        // 4. Products
        Product::factory(20)->create();

        // 5. Orders
        Order::factory(10)->create();

        // 6. Order items
        OrderItem::factory(30)->create();
    }
}