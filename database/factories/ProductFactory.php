<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->words(3, true);
        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(4),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 5, 200),
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => 'https://picsum.photos/seed/' . rand(1, 999) . '/600/400',
        ];
    }
}
