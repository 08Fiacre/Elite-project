<?php

namespace Database\Factories;

use App\Models\Transporteur;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransporteurFactory extends Factory
{

/**
     * Define the model's default state.
     *
     * @return array
     */ 
    protected $model = Transporteur::class;
     
    
         
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NomTransporteur" => $this->faker->name(),
            "CoordonneesTransporteur" => $this->faker->address,
            "TypeService" => $this->faker->word,
            "TarifLivraison" => $this->faker->randomFloat(2, 10, 200),
        ];
    }
}
