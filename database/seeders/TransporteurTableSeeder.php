<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transporteur;
class TransporteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transporteur::factory(10)->create();
    }
}
