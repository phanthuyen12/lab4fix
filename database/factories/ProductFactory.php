<?php

// database/factories/ProductFactory.php
namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'image' => $this->faker->imageUrl,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'sale' => $this->faker->randomFloat(2, 5, 50),
            'description' => $this->faker->paragraph,
            'detail' => $this->faker->text,
            'status' => $this->faker->randomElement(['available', 'unavailable']),
            'category_id' => Category::factory(),
        ];
    }
}
