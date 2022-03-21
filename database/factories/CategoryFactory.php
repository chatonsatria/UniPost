<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(1,4)),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->paragraph(mt_rand(5,10))
        ];
    }
}
