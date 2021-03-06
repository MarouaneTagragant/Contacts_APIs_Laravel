<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'firstName' => $this->faker->firstNameMale,
            'lastName'  => $this->faker->lastName,
            'email'     => $this->faker->unique()->safeEmail,
            'country'    => $this->faker->country,
            'city'    => $this->faker->city,

        ];
    }
}
