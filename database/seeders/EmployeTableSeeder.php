<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employe;
class EmployeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employe::factory(10)->create();
    }
}
