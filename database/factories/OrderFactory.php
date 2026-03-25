<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'total_amount' => fake()->randomFloat(2, 100, 5000),
            'status' => fake()->randomElement([
                'pending',
                'processing',
                'shipped',
                'delivered',
                'cancelled'
            ]),
            'invoice_url' => null,
        ];
    }
}