<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laboratory>
 */
class LaboratoryFactory extends Factory
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
            'item_type' => $this->faker->item_type,
            'item_cond' => $this->faker->item_cond,
            'description' => $this->faker->description,
            'defects' => $this->faker->defects,
            'quantity' => $this->faker->quantity,
            'file' => $this->faker->file('C:\xampp\tmp', ' C:\xampp\htdocs\lastpractice\lastpractice\public\storage', false),
        ];
    }
}
