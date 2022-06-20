<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Advert>
 */
class AdvertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(400),
            'price' => $this->faker->numberBetween(1, 10000),
            'user_id' => $this->faker->numberBetween(1, 5),
            'category_id' => $this->faker->numberBetween(1, 5),
            'status_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
