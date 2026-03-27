<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        // ALWAYS safely get category ID
        $categoryId = Category::query()->inRandomOrder()->value('id');

        return [
            'category_id' => $categoryId ?? Category::factory(),

            'name' => $name = $this->faker->unique()->words(3, true),
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 500, 5000),
            'stock' => $this->faker->numberBetween(1, 100),
            'image' => null,
        ];
    }
}