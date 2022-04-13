<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employes;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employes::factory()->count(50)->create();
    }
}
