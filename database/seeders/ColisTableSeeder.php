<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colis;

class ColisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Colis::factory(20)->create();
    }
}
