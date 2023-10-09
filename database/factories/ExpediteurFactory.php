<?php

namespace Database\Factories;
use App\Models\Expediteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpediteurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Expediteur::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NomExpediteur" => $this->faker->name,
            "AdresseExpediteur" => $this->faker->address,
            "TelephoneExpediteur" => $this->faker->phoneNumber,
        ];
    }
}
