<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLevel>
 */
class UserLevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_level_id' => $this->faker->uuid(),
            'user_level_name' => $this->faker->unique()->word(),
            'user_level' => 2,
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
