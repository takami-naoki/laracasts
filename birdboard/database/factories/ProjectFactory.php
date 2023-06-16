<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'notes' => 'Foobar notes',
            'description' => $this->faker->sentence(4),
            'owner_id' => User::factory()
        ];
    }
}
