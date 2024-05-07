<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Celular>
 */
class CelularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),
            'image' => $this->faker->imageUrl(),
            'weight' => $this->faker->randomFloat(2, 0, 10),
            'is_waterproof' => $this->faker->boolean,
            'release_date' => $this->faker->date(),
            'specifications' => $this->faker->paragraphs(3, true),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
