<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $oldEnough = Carbon::now()->subYears(18);

        return [
            'date_of_birth' => $this->faker->dateTimeBetween('1940-01-01', $oldEnough)->format('Y-m-d'),
        ];
    }
}
