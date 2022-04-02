<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends Factory
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = ucfirst($this->faker->word());
        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
