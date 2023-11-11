<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PasswordRule>
 */
class PasswordRuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'password_rule_id' => $this->faker->uuid(),
            'password_rule_name' => $this->faker->unique()->word(),
            'password_rule_description' =>$this->faker->paragraph(), // password
            'password_rule_level' => 5,
        ];
    }
}
