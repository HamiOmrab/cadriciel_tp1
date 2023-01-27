<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Ville;
use App\Models\Etudient;

class EtudientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email'  => $this->faker->unique()->safeEmail(),
            'date_de_naissance' => $this->faker->dateTimeBetween('-60 year', '-18 year'),
            'villeId' => $this->faker->unique()->numberBetween(1, 100)
        ];
    }
}
