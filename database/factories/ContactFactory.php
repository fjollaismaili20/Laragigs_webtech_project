<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'name'  => $this->faker->name(),
            'email' => $this->faker->companyEmail(),
            'phone' => $this->faker->phone(),
            'subject' => $this->faker->subject(),
            'message' => $this->faker->paragraph(5),
           

        ];
    }
}
