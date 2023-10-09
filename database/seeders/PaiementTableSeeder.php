<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paiement;

class PaiementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paiement::factory(10)->create();
    }
}
