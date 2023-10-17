<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->company();

        return [
            'title' => $name,
            'slug' => Str::slug($name),
            'body' => $this->faker->text(),
            'user_id' => rand(1, 5)
        ];
    }
}
