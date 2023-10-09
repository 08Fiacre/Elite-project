<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employe;

class EmployeFactory extends Factory
{/**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Employe::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "NomEmploye" => $this->faker->name,
            "RoleEmploye" => $this->faker->jobTitle,
            "ContactEmploye" => $this->faker->phoneNumber,
        ];
    }
}
