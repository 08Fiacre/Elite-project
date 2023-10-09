<?php

namespace Database\Factories;

use App\Models\StatutColis;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatutColisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = StatutColis::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NomStatut' => $this->faker->word,
        ];
    }
}
