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
        $number = $this->faker->numberBetween(1, 500);
        $name = ucfirst($this->faker->word()).$this->faker->randomElement($array = [' House', ' Cottage', ' Building']);
        $suburb = $this->faker->city();
        $county = ucfirst($this->faker->word()).'shire';

        return [
            'date_of_birth' => $this->faker->dateTimeBetween('1940-01-01', $oldEnough)->format('Y-m-d'),
            'image' => $this->faker->imageUrl(),
            'phone_number' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement($array = ['male', 'female']),
            'address_name_number' => $this->faker->randomElement($array = [null, $number, $name]),
            'address_street_1' => $this->faker->streetName(),
            'address_street_2' => $this->faker->randomElement($array = ['null', $suburb]),
            'address_city' => $this->faker->city(),
            'address_county' => $county,
            'address_country' => 'United Kingdom',
            'address_postcode' => $this->faker->postcode(),
        ];
    }
}
