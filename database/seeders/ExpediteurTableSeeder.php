<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expediteur;

class ExpediteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expediteur::factory(10)->create();
    }
}
