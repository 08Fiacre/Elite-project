<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Destinataire;

class DestinataireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destinataire::factory(10)->create();
    }
}
