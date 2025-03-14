<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Activity;
use App\Models\User;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{

    protected $model = Activity::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
            'activity_type' => $this->faker->randomElement(['walking', 'running', 'cycling', 'swimming']),
            'points' => 20,
            'performed_at' => Carbon::now()->subDays(rand(0, 30)),
        ];
    }
}
