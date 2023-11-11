<?php

namespace Database\Factories;

use App\Models\PasswordRule;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PasswordHistory>
 */
class PasswordHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'password_history_id' => $this->faker->uuid(),
            'password_name' => $this->faker->unique()->word(),
            'password_hash' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'user_id' => User::inRandomOrder()->first()->id,
            'password_rule_id' => PasswordRule::inRandomOrder()->first() ?PasswordRule::inRandomOrder()->first()->id : null,
        ];
    }
}
