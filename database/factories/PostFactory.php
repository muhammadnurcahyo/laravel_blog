<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'exceprt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraph(mt_rand(5,10)),
            'user_id' => mt_rand(1,2),
            'category_id' => mt_rand(1,2)
        ];
    }
}
