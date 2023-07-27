<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
   * The name of the factory's corresponding model.
   *
   *
   */
    protected $model = Contact::class;

    /**
   * Define the model's default state.
   *
   *
   */

    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->randomElement([1,2]),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->randomNumber(8),
            'address' => $this->faker->streetAddress,
            'building_name' => $this->faker->buildingNumber,
            'opinion' => $this->faker->paragraph(1,120),
        ];
    }
}
