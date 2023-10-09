<?php

namespace Database\Factories;

use App\Models\HistoriqueLivraison;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoriqueLivraisonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = HistoriqueLivraison::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ColisID' => $this->faker->numberBetween(1, 50),
            'DateHeureLivraison' => $this->faker->dateTimeThisYear,
            'SignatureDestinataire' => $this->faker->name,
            'CommentairesLivraison' => $this->faker->text,
        ];
    }
}
