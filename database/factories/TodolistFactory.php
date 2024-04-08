<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Todolist>
 */
class TodolistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'  => 1,
            'content'  => $this->faker->realText(30),
            'deadline' => $this->faker->date(),
            'status'   => $this->faker->boolean(),
        ];
    }
}
