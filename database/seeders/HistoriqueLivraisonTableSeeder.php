<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HistoriqueLivraison;

class HistoriqueLivraisonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HistoriqueLivraison::factory(10)->create();
    }
}
