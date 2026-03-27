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
        // Admin
        $this->call(AdminSeeder::class);

        // Users (10 + admin = 11 total)
        User::factory(10)->create();

        // Categories (5)
        Category::factory(5)->create();

        // Products (20) ✅ FIXED
        Product::factory(20)->create();

        // Orders (10)
        Order::factory(10)->create();

        // Order Items (30)
        OrderItem::factory(30)->create();
    }
}