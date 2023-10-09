<?php

namespace Database\Seeders;

use App\Models\ExpediteurTableSeeder;
use App\Models\TransporteurTableSeeder;
use App\Models\DestinataireTableSeeder;
use App\Models\EmployeTableSeeder;
use App\Models\StatutColisTableSeeder;
use App\Models\HistoriqueLivraisonTableSeeder;
use App\Models\PaiementTableSeeder;
use App\Models\ColisTableSeeder;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TransporteurTableSeeder::class);
        $this->call(ExpediteurTableSeeder::class);
        $this->call(DestinataireTableSeeder::class);
        $this->call(EmployeTableSeeder::class);
        $this->call(StatutColisTableSeeder::class);
        $this->call(HistoriqueLivraisonTableSeeder::class);
        $this->call(PaiementTableSeeder::class);
        $this->call(ColisTableSeeder::class);
    }
}
