<?php

namespace Database\Factories;

use App\Models\Colis;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Colis::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomColis' => $this->faker->word,
            'DescriptionContenu' => $this->faker->sentence,
            'Poids' => $this->faker->randomFloat(2, 1, 100),
            'DateEnvoi' => $this->faker->date(),
            'StatutColisID' => $this->faker->numberBetween(1, 5), // Remplacez par la logique de génération souhaitée
            'ExpediteurID' => $this->faker->numberBetween(1, 20),
            'DestinataireID' => $this->faker->numberBetween(1, 20),
            'TransporteurID' => $this->faker->numberBetween(1, 10),
            'EmployeID' => $this->faker->numberBetween(1, 30),
        ];
    }
}
