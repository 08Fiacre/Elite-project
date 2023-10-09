<?php

namespace Database\Factories;

use App\Models\Paiement;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaiementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Paiement::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ColisID' => $this->faker->numberBetween(1, 50),
            'MontantPaiement' => $this->faker->randomFloat(2, 10, 1000),
            'DatePaiement' => $this->faker->dateTimeThisYear,
            'ModePaiement' => $this->faker->randomElement(['Carte de crédit', 'PayPal', 'Virement bancaire']),
        ];
    }
}
