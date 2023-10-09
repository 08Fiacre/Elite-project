<?php

namespace Database\Factories;

use App\Models\Destinataire;
use Illuminate\Database\Eloquent\Factories\Factory;

class DestinataireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Destinataire::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NomDestinataire" => $this->faker->company,
            "AdresseDestinataire" => $this->faker->address,
            "TelephoneDestinataire" => $this->faker->phoneNumber,
        ];
    }
}
