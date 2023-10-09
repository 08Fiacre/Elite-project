<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StatutColis;

class StatutColisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StatutColis::factory(5)->create();
    }
}
